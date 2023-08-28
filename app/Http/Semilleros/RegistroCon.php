<?php

namespace App\Http\Semilleros;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;
use App\Models\SemilleristasMod;

class RegistroCon extends Component
{
    public function render()
    {
        $semillero = DB::table('semillero')->get();
        $id_coor = DB::table('semillero')->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.registrarSem',['semillero'=>$semillero, 'coordinador'=>$coordinador]);
    }

    public function registrar(Request $r){
        $semillero = new SemilleroMod();
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
