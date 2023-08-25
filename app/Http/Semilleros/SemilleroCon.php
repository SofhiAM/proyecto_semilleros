<?php

namespace App\Http\Semilleros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;
use App\Models\User;

class SemilleroCon extends Controller
{
    public function render()
    {
        $semillero = DB::table('semillero')->get();
        return view('Semilleros.semillero',['semillero'=>$semillero]);
    }

    public function eliminar( $id ){
        $semillero = SemilleroMod::findOrFail($id);
        $semillero->delete();
        return redirect()->route('semillero');
    }

    public function editarForm( $id ){
        $semillero = SemilleroMod::findOrFail($id);
        return view('Semilleros.editarSem',['s'=>$semillero]);
    }
    public function editar(Request $r,$id ){
        $semillero = SemilleroMod::findOrFail($id);
        $semillero->id_semillero = $r->input('idsem');
        $semillero->nom_semillero = $r->input('nomsem');
        $semillero->correo_semillero = $r->input('correosem');
        $semillero->logo_semillero = $r->input('logosem');
        $semillero->descrip_semillero = $r->input('descsem');
        $semillero->mision = $r->input('mision');
        $semillero->vision = $r->input('vision');
        $semillero->valores = $r->input('valores');
        $semillero->objetivos = $r->input('objetivos');
        $semillero->linea_invest = $r->input('lineainv');
        $semillero->presentacion = $r->input('presen');
        $semillero->fecha_creacion_sem = $r->input('fec-crea');
        $semillero->numres_semillero = $r->input('no-res');
        $semillero->resolucion_semillero = $r->input('ressem');
        $semillero->id_coordinador= $r->input('id-coor');
        $semillero->save();
        return redirect()->route('semillero');
    }

}
