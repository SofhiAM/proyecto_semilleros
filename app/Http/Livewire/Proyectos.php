<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SemilleroMod;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Proyectos extends Component
{
    public function render()
    {
        return view('livewire.proyectos');
    }

    public function registrar(Request $r){
        $proyecto = new Proyecto();
        $semi = DB::table('semillero')->get();
        $nomsemi = $r->input('id_semillero');
        $codsemi = $semi->where('nom_semillero', $nomsemi)->first()->id_semillero;

        $proyecto->id_proyecto = $r->input('id_proyecto');
        $proyecto->titulo_proyecto = $r->input('titulo_proyecto');
        $proyecto->tipo_proyecto = $r->input('tipo_proyecto');
        $proyecto->estado_proyecto = $r->input('estado_proyecto');
        $proyecto->fecinicio_proyecto = $r->input('fecinicio_proyecto');
        $proyecto->fecfin_proyecto = $r->input('fecfin_proyecto');
        $proyecto->id_semillero = $codsemi;

        $proyecto->save();

        return redirect()->route('ver-proyectos');

    }
}
