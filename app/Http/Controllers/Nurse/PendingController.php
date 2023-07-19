<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use App\Models\Donar;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function index(Request $request){

        if ($request->name == null) {
            $pendings = Donar::orderBy('id', 'Desc')->get();

        }else{
            $pendings =  Donar::where('mother_name_ar','like' ,'%' . $request->name . '%')->get();

        }

            return view('Nurse.pending',compact('pendings'));

    }
    public function report(Request $request){
        if ($request->name == null) {
            $pendings = Donar::whereHas('cell')->get();

        }else{
            $pendings =  Donar::whereHas('cell')->where('mother_name_ar','like' ,'%' . $request->name . '%')
                ->orWhereHas('cell', function ($query) use ($request) {
                    return $query->where('test_performed_by', 'like', '%' . $request->name . '%');
                })->get();

        }
        $resents=Donar::whereHas('cell')->orderBy('id','DESC')->limit(5)->get();
        $starts = Donar::whereHas('cell')->where('start',1)->get();
        return view('Nurse.report',compact('pendings','resents','starts'));

    }
    public function start($id){
        $start = Donar::find($id);
        if($start->start ==0){
            $start->update(['start'=>1]);
            return redirect()->route('report');
        }
        if($start->start ==1){
            $start->update(['start'=>0]);
            return redirect()->route('report');
        }

    }

    public function show($id){
        $report = Donar::with(['cpus','contacts','cell'])->find($id);

        return view('Nurse.final_report',compact('report'));
    }

}
 
