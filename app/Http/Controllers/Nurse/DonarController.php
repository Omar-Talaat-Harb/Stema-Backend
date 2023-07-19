<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use App\Models\Donar;
use Illuminate\Http\Request;
use Validator;

class DonarController extends Controller
{

    public function service()
    {
        return view('Nurse.services1');
    }

    public function index(Request $request)
    {
        if ($request->has('id')) $donar = Donar::find($request->id);

        return view('Nurse.registration', get_defined_vars());
    }

    public function store(Request $request)
    {
        if (!$request->has('donar_id')) {
            $validator = $request->validate([
                'mother_name_ar' => 'required|',
                'national_id' => 'required|numeric',
                'blood_group' => 'required',
            ]);
            // $validator = Validator::make($request->all(), [
            //     'mother_name_ar' => 'required|',
            //     'national_id' => 'required|numeric',
            //     'blood_group' => 'required',


            // ]);
            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInputs($request->all());
            // }


            $donar = Donar::create($request->all());
        } else {
            $donar = Donar::find($request->donar_id);
            $donar->update($request->except(['donar_id']));
        }
        return redirect()->route('contact', $donar->id);
    }
}
