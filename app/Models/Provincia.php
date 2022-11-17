<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = ['descripcion'];

    public static function getProvincias($id)
    {
        $data = DB::table('departamento_provincia')
            ->join('departamentos', 'departamento_provincia.departamentos_id', '=', 'departamentos.id')
            ->join('provincias', 'departamento_provincia.provincias_id', '=', 'provincias.id')
            ->select(
                'provincias.id',
                'provincias.descripcion'
            )
            ->where('departamento_provincia.departamentos_id', $id)
            ->orderby('provincias.descripcion')
            ->get();

        return $data;
    }
}
