<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function index($id){
        $contact=Contact::where('donar_id',$id)->first();

        return view('Nurse.contact',get_defined_vars());
    }
    public function store(Request $request){
        $validator=$request->validate([
            'phone' => 'nullable|numeric',
            'mobile' => 'nullable|numeric',
            'donar_id' => 'required|numeric',
        ]);
        if ($request->has('contact_id')){
            Contact::find($request->contact_id)->update($request->except(['contact_id']));
        }else{
            $contact=Contact::create($request->all());
        }
        return redirect()->route('cbu',$request->donar_id);

    }
}
