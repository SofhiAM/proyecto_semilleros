<?php

namespace App\Http\Semilleros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;

class MiSemilleroCon extends Controller
{
    public function render($id)
    {
        $semillero = SemilleroMod::findOrFail($id);
        $id_coor = DB::table('semillero')->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.miSemillero',['semillero'=>$semillero, 'coordinador'=>$coordinador]);
    }

}
