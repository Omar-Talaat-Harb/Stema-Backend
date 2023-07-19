<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;

use App\Models\Cpu;
use App\Models\Donar;
use Illuminate\Http\Request;
use Validator;

class CpuController extends Controller
{
    public function index($id)
    {
        $cbu = Cpu::where('donar_id', $id)->first();
        return view('Nurse.cbu',get_defined_vars());

    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'hospital_name' => 'required|',
            'hospital_number' => 'nullable|numeric',
            'donation_type' => 'required',
            //  'stem_sells' => 'required',
            'donar_consest' => 'required',
            'donar_agreement' => 'required',
            'unit_image' => 'required',
            'donar_id' => 'required',

        ]);
        // public function store(Request $request){

        //     $validator = Validator::make($request->all(), [
        //         'hospital_name' => 'required|',
        //         'hospital_number' => 'nullable|numeric',
        //         'donation_type' => 'required',
        //       //  'stem_sells' => 'required',
        //         //'donar_consest' => 'required',
        //    //     'donar_agreement' => 'required',
        //         'unit_image' => 'required',
        //         'donar_id' => 'required',

        //     ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }

        $donar_consest = $this->uploadimage('donars', $request->donar_consest);

//بصي انت حجم الصور الي كنت بترفعيها كبير فمل وكمان انت مش هتعرفي تجيبي لينك c

        $donar_agreement = $this->uploadimage('donars', $request->donar_agreement);
        $unit_image = $this->uploadimage('donars', $request->unit_image);


        if($request->has('cbu_id')){
            Cpu::find($request->cbu_id)->update([
                'hospital_name' => $request->hospital_name,
                'hospital_number' => $request->hospital_number,
                'donation_type' => $request->donation_type,
                'stem_sells' => $request->stem_sells,
                'donar_consest' => $donar_consest,
                'donar_agreement' => $donar_agreement,
                'unit_image' => $unit_image,
                'donar_id' => $request->donar_id,
            ]);
        }else{
            $cpu = Cpu::create([
                'hospital_name' => $request->hospital_name,
                'hospital_number' => $request->hospital_number,
                'donation_type' => $request->donation_type,
                'stem_sells' => $request->stem_sells,
                'donar_consest' => $donar_consest,
                'donar_agreement' => $donar_agreement,
                'unit_image' => $unit_image,
                'donar_id' => $request->donar_id,
            ]);
        }
        return redirect()->route('collection', $request->donar_id);

    }


    function uploadimage($folder, $photo)
    {
        $destination = 'assets/images/' . $folder;
        $photo = $photo;
        $filename = $photo->hashName();
        $photo->move($destination, $filename);
        return $filename;

    }


}
