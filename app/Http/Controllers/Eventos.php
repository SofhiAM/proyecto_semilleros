<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Evento;

class Eventos extends Controller
{

    public function index(){
        $eventos = DB::table('evento')->get();
        return view ('eventos.listado', ['eventos' => $eventos]);
    }

    public function form_eventos(){
        return view('eventos.registrar-ev');
    }

    public function registrar(Request $r){
        $evento = new Evento();

        $evento->id_evento = $r->input('id_evento');
        $evento->nom_evento = $r->input('nom_evento');
        $evento->descrip_evento = $r->input('descrip_evento');
        $evento->fecinicio_evento = $r->input('fecini_evento');
        $evento->fecfin_evento = $r->input('fecfin_evento');
        $evento->lugar_evento = $r->input('lugar_evento');
        $evento->tipo_evento = $r->input('tipo_evento');
        $evento->modalidad_evento = $r->input('modalidad_evento');
        $evento->clasific_evento = $r->input('clasif_evento');
        $evento->observ_evento = $r->input('obser_evento');

        $showSuccesNotification  = true;
        $evento->save();

        return redirect()->route('ver-eventos');

    }

    public function eliminar ($id){
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('ver-eventos');
    }

    public function reporte (){
        $pdf = \PDF::loadView('reportes.rep_eventos');
        return $pdf->download('reporte_eventos.pdf');
    }
}
