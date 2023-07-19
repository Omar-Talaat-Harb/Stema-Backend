<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
USE App\Models\Cell;
use App\Models\Donar;
use App\Models\Contact;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function services(){
        return view('doctor.services');
    }

    public function pending(Request $request ){
        if ($request->name == null) {
            $pendings = Donar::where('pending',1)->get();

        }else{
            $pendings =  Donar::where('mother_name_ar','like' ,'%' . $request->name . '%')->get();

        }
        // $pendings=donar::where('pending',1)->get();
        return view('doctor.pending')->with('pendings',$pendings);
       
    }

    
    public function statistics(){
        //retrieve count of accepted and rejected cells 
        $volume1 = cell::whereBetween('volume',[0,40])->count();
        $volume2 = cell::whereBetween('volume',[40,80])->count();
        $volume3 = cell::whereBetween('volume',[80,120])->count();
        $volume4 = cell::whereBetween('volume',[120,160])->count();
        $volume5 = cell::whereBetween('volume',[160,200])->count();
        $WBCs1= cell:: wherebetween('post_wbcsx109/l',[0,10])->count();
        $WBCs2= cell:: wherebetween('post_wbcsx109/l',[10,20])->count();
        $WBCs3= cell:: wherebetween('post_wbcsx109/l',[20,30])->count();
        $WBCs4= cell:: wherebetween('post_wbcsx109/l',[30,40])->count();
        $WBCs5= cell:: wherebetween('post_wbcsx109/l',[40,50])->count();
        $WBCs6= cell:: wherebetween('post_wbcsx109/l',[50,60])->count();
        $WBCs7= cell:: wherebetween('post_wbcsx109/l',[60,70])->count();
        $approved = Cell::where('result',0)->count();
        $rejected = Cell::where('result',1)->count();
        $pending= Donar::where('pending',1)->count();
        $data = [
            'approved'  => $approved,
            'rejected'  => $rejected,
            'pending'   => $pending,
            'volume1'   => $volume1,
            'volume2'   => $volume2,
            'volume3'   => $volume3,
            'volume4'   => $volume4,
            'volume5'   => $volume5,
            'WBCs1' =>  $WBCs1,
            'WBCs2' =>  $WBCs2,
            'WBCs3' =>  $WBCs3,
            'WBCs4' =>  $WBCs4,
            'WBCs5' =>  $WBCs5,
            'WBCs6' =>  $WBCs6,
            'WBCs7' =>  $WBCs7,
            
        ];
        return view('statistics')->with('data',$data);
    }

    public function disabledregstration($id){
        
        $donar=donar::find($id);
         return view('doctor.disabled.disabledregstration')->with('donar',$donar);
        
    }

    public function disabledcbu($id){
        $donar=donar::find($id);
        return view('doctor.disabled.disableldCBU')->with('donar',$donar);
    }

    public function disablebcontactdata($id){
        $donar=donar::find($id);
        $Contact=Contact::where('donar_id',$id)->first();
        $data=[
            'donar'=>$donar,
            'contact'=>$Contact,
        ];
        
        return view('doctor.disabled.disabledcontactdata')->with('data',$data);
    }


    public function cell(){
        return session()->get('cell');
    }
    

}
