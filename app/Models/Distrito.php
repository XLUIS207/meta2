<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';
    protected $fillable = ['descripcion'];

    public static function getDistritos($id){
        return Distrito::where('provincias_id', $id)
        ->get();
    }
}
