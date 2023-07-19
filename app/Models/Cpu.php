<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;
    protected $table='cpus';
    protected $guarded=[];

    public function donar(){
        return $this->belongsTo(Donar::class,'donar_id');
    }


}
