<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Cell;
use App\Models\Donar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class laboratoryController extends Controller
{
    public function laboratory1($id){
        $donar=donar::find($id);
        return view('doctor.laborartory.laboratoriesp1')->with('donar',$donar);
    }
    public function postlaboratory1(Request $request){

        $response = Http::post('http://127.0.0.1:5000/success', [
            'quality_of_collection_bags_cleanness' =>$request->quality_of_collection_bags_cleanness,
            'num_of_needles'=>$request->num_of_needles,
            'satellite_bag'=>$request->satellite_bag,
            'clots'=>$request->clots,
            'net_weight'=>$request->net_weight,
            'volume'=>$request->volume,
            'prewbcsx109l'=>$request->prewbcsx109l,
            'pre_cd_45_34'=>$request->pre_cd_45_34,
            'pre_viability_of_tnc'=>$request->pre_viability_of_tnc,
            'post_wbcsx109_l'=>$request->post_wbcsx109l,
        ]);

        if(empty($request->session()->get('cell'))){
            $cell = new Cell();
        }else{
            $cell = $request->session()->get('cell');
        }

        $status = ($response['predictions'][0] == 1) ? "Rejected" : "Approved";

        $cell->fill([
            'quality_of_collection_bags_cleanness'=>$request->quality_of_collection_bags_cleanness,
            'num_of_needles'=>$request->num_of_needles,
            'satellite_bag'=>$request->satellite_bag,
            'clots'=>$request->clots,
            'net_weight'=>$request->net_weight,
            'volume'=>$request->volume,
            'prewbcsx109l'=>$request->prewbcsx109l,
            'pre_%cd+45/34'=>$request->pre_cd_45_34,
            'pre_viability_of_tnc'=>$request->pre_viability_of_tnc,
            'post_wbcsx109/l'=>$request->post_wbcsx109l,
            'approved_status'   => $status,
            'result'    =>$response['predictions'][0],
            'test_performed_by' => auth()->user()->firstname . ' '. auth()->user()->lastname,
            'donar_id'=>$request->donar_id
        ]);

        $request->session()->put('cell', $cell);

        return response()->json(['success' =>$response['predictions'][0]]);

    }


    public function laboratory2(){
        
        return view('doctor.laborartory.laboratoriesp2');
    }
    public function postlaboratory2(Request $request){

        // $request->session()->forget('cell');
        if(empty($request->session()->get('cell'))){
            $cell = new Cell();
            $cell->fill([
                'sample_type'=>$request->sample_type,
                'sample_sent_date'=>$request->sample_sent_date,
                'pre_vaiblity_teqniqe'=>$request->pre_vaiblity_teqniqe,
                'pre_vaiblity_results'=>$request->pre_vaiblity_results,
                'pre_count_of_viable_cell'=>$request->pre_count_of_viable_cell,
                'pre_dilution_factor'=>$request->pre_dilution_factor,
                'pre_average_viable_cd34_cd45_positive_cell_percentage'=>$request->pre_average_viable_cd34_cd45_positive_cell_percentage,
                'pre_average_viable_absolute_cd34_positive_cell_count'=>$request->pre_average_viable_absolute_cd34_positive_cell_count,
                'pre_average_viable_cd34_positive_cell_percentage'=>$request->pre_average_viable_cd34_positive_cell_percentage,
            ]);
            $request->session()->put('cell', $cell);
        }
        else{
            $cell = $request->session()->get('cell');
            $cell->fill([
                'sample_type'=>$request->sample_type,
                'sample_sent_date'=>$request->sample_sent_date,
                'pre_vaiblity_teqniqe'=>$request->pre_vaiblity_teqniqe,
                'pre_vaiblity_results'=>$request->pre_vaiblity_results,
                'pre_count_of_viable_cell'=>$request->pre_count_of_viable_cell,
                'pre_dilution_factor'=>$request->pre_dilution_factor,
                'pre_average_viable_cd34_cd45_positive_cell_percentage'=>$request->pre_average_viable_cd34_cd45_positive_cell_percentage,
                'pre_average_viable_absolute_cd34_positive_cell_count'=>$request->pre_average_viable_absolute_cd34_positive_cell_count,
                'pre_average_viable_cd34_positive_cell_percentage'=>$request->pre_average_viable_cd34_positive_cell_percentage,
            ]);
            $request->session()->put('cell', $cell);
        }

        return redirect()->route('laboratory3');
    }

    public function laboratory3(){
        return view('doctor.laborartory.laboratoriesp3');
    }

    public function postlaboratory3(Request $request){

        if(empty($request->session()->get('cell'))){
            $cell = new Cell();
            $cell->fill([
                'pre_count_of_cd34_positive_cell_preprocessing'=>$request->pre_count_of_cd34_positive_cell_preprocessing,
                'post_vaiblity_teqniqe'=>$request->post_vaiblity_teqniqe,
                'post_vaiblity_results'=>$request->post_vaiblity_results,
                'post_count_of_viable_cell'=>$request->post_count_of_viable_cell,
                'post_dilution_factor'=>$request->post_dilution_factor,
                'post_average_viable_cd34_cd45_positive_cell_percentage'=>$request->post_average_viable_cd34_cd45_positive_cell_percentage,
                'post_average_viable_absolute_cd34_positive_cell_count'=>$request->post_average_viable_absolute_cd34_positive_cell_count,
                'post_average_viable_cd34_positive_cell_percentage'=>$request->post_average_viable_cd34_positive_cell_percentage,
            ]);
            $request->session()->put('cell', $cell);
        }else{
            $cell = $request->session()->get('cell');
            $cell->fill([
                'pre_count_of_cd34_positive_cell_preprocessing'=>$request->pre_count_of_cd34_positive_cell_preprocessing,
                'post_vaiblity_teqniqe'=>$request->post_vaiblity_teqniqe,
                'post_vaiblity_results'=>$request->post_vaiblity_results,
                'post_count_of_viable_cell'=>$request->post_count_of_viable_cell,
                'post_dilution_factor'=>$request->post_dilution_factor,
                'post_average_viable_cd34_cd45_positive_cell_percentage'=>$request->post_average_viable_cd34_cd45_positive_cell_percentage,
                'post_average_viable_absolute_cd34_positive_cell_count'=>$request->post_average_viable_absolute_cd34_positive_cell_count,
                'post_average_viable_cd34_positive_cell_percentage'=>$request->post_average_viable_cd34_positive_cell_percentage,
            ]);
            $request->session()->put('cell', $cell);
        }
        return redirect()->route('laboratory4');
    }

    public function laboratory4(){
        return view('doctor.laborartory.laboratoriesp4');
    }

    public function postlaboratory4(Request $request){

        if(empty($request->session()->get('cell'))){
            $cell = new Cell();
            $cell->fill([
                'post_count_of_cd34_positive_cell_preprocessing'=>$request->post_count_of_cd34_positive_cell_preprocessing,
                'test_performed_by'=>auth()->user()->id,
                'start_freezing_time'=>$request->start_freezing_time,
                'end_freezing_time'=>$request->end_freezing_time,
                'injection_start_time'=>$request->injection_start_time,
                'injection_end_time'=>$request->injection_end_time,
                'start_temperature'=>$request->start_temperature,
                'end_point_temperature'=>$request->end_point_temperature,
            ]);
            $request->session()->put('cell', $cell);
        }else{
            $cell = $request->session()->get('cell');
            $cell->fill([
                'post_count_of_cd34_positive_cell_preprocessing'=>$request->post_count_of_cd34_positive_cell_preprocessing,
                'test_performed_by'=>auth()->user()->id,
                'start_freezing_time'=>$request->start_freezing_time,
                'end_freezing_time'=>$request->end_freezing_time,
                'injection_start_time'=>$request->injection_start_time,
                'injection_end_time'=>$request->injection_end_time,
                'start_temperature'=>$request->start_temperature,
                'end_point_temperature'=>$request->end_point_temperature,
            ]);
            $request->session()->put('cell', $cell);
        }
        $cell->save();
        $user=Donar::find(session()->get('cell.donar_id'));
        $user->pending=0;
        $user->save();
        $request->session()->forget('cell');
        return redirect()->route('services');
    }
}
