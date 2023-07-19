<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $table='collections';
    protected $guarded=[];

    public function donar(){
        return $this->belongsTo(Donar::class,'donar_id');
    }
}
