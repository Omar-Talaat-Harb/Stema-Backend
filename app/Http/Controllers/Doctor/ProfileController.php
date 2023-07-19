<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfile()
    {

        $userId = Auth::user()->id;
        $userData = User::find($userId);
        return view ('doctor.profile',compact('userData'));
    }
    public function updatePassword(Request $request)
    {
        $userId = Auth::user()->id;
        $updatetData = User::find($userId);
        $validateData = $request-> validate([
            'oldpassword' =>'required',
            'newpassword' =>'required',
            'confirmpassword' => 'required|same:newpassword'
        ]);
        $hashedpassword = Auth::user()->password;
        
        if(Hash::check($request->oldpassword,$hashedpassword))
        {
            if (is_null($request->newpassword) ){
                session()->flash('fail','new password can not be empty');
                return redirect()->back();
            }
            $updatetData->password = bcrypt($request->newpassword);
            $updatetData->save();
            return redirect()->route('showProfile')->with(['success' => 'updated successfuly']);
        
        } 
        else 
        {
            session()->flash('fail','Old Password is not correct');
            return redirect()->back();
        }

        
    }
    public function updateProfile(Request $request)
    {
        // dd($request->all());
        $userId = Auth::user()->id;
        $updatetData = User::find($userId);
       

     

        $updatetData ->update([

            'firstname' => $request -> firstname,
            'lastname' => $request -> lastname,
            'email' =>$request -> email,
            'nationalid' =>$request ->nationalid,
        ]);

        return redirect()->route('showProfile')->with(['success' => 'updated successfuly']); 

        
    }
             
}
