<?php

namespace App\Http\Semilleros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;
use App\Models\SemilleristasMod;

class SemilleristasCon extends Controller
{
    public function render($id)
    {
        $semillero = SemilleroMod::findOrFail($id);
        $id_semillero = SemilleroMod::findOrFail($id)->value('id_semillero');
        $semillerista = DB::table('semillerista')->where('id_semillero',$id_semillero)->get();
        $id_coor = DB::table('semillero')->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.semilleristas',['semillero'=>$semillero, 'coordinador'=>$coordinador, 'semillerista'=>$semillerista]);
    }

}
