<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;
    protected $table='cells';
    protected $guarded=[];

    // protected $casts = [
    //     'start_freezing_time' => 'date:hh:mm',
    //     'end_freezing_time' => 'date:hh:mm',
    //     'injection_start_time' => 'date:hh:mm',
    //     'injection_end_time' => 'date:hh:mm',
    // ];

    public function getStartFreezingTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getEndFreezingTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getInjectionStartTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getInjectionEndTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }
}
