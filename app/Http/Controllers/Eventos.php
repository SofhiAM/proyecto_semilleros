<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Evento;
use App\Models\Proyecto;
use App\Models\Participante;

class Eventos extends Controller
{

    public function index(){
        $eventos = DB::table('evento')->get();
        return view ('eventos.listado', ['eventos' => $eventos]);
    }

    public function eventos_coor(){
        $eventos = DB::table('evento')->get();
        return view ('eventos.listado-vistacoor', ['eventos' => $eventos]);
    }

    public function form_eventos(){
        return view('eventos.registrar-ev');
    }

    public function registrar(Request $r){
        $evento = new Evento();

        $evento->nom_evento = $r->input('nom_evento');
        $evento->descrip_evento = $r->input('descrip_evento');
        $evento->fecinicio_evento = $r->input('fecini_evento');
        $evento->fecfin_evento = $r->input('fecfin_evento');
        $evento->lugar_evento = $r->input('lugar_evento');
        $evento->tipo_evento = $r->input('tipo_evento');
        $evento->modalidad_evento = $r->input('modalidad_evento');
        $evento->clasific_evento = $r->input('clasif_evento');
        $evento->observ_evento = $r->input('obser_evento');

        $evento->save();

        return redirect()->route('ver-eventos');
    }

    public function eliminar ($id){
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('ver-eventos');
    }

    public function form_editar ($id){
        $evento = Evento::findOrFail($id);
        return view ('eventos.editar-ev', ['evento'=>$evento]);
    }

    public function editar(Request $r, $id){
        $evento = Evento::findOrFail($id);

        $evento->nom_evento = $r->input('nom_evento');
        $evento->descrip_evento = $r->input('descrip_evento');
        $evento->fecinicio_evento = $r->input('fecini_evento');
        $evento->fecfin_evento = $r->input('fecfin_evento');
        $evento->lugar_evento = $r->input('lugar_evento');
        $evento->tipo_evento = $r->input('tipo_evento');
        $evento->modalidad_evento = $r->input('modalidad_evento');
        $evento->clasific_evento = $r->input('clasif_evento');
        $evento->observ_evento = $r->input('obser_evento');

        $evento->save();

        return redirect()->route('ver-eventos');
    }

    public function reporte (){
        $pdf = \PDF::loadView('reportes.rep_eventos');
        return $pdf->download('reporte_eventos.pdf');
    }

    public function vermas ($id){
        $evento = Evento::findOrFail($id);
        return view ('eventos.vermas-evcoor', ['evento'=>$evento]);
    }

    public function participar ($id){
        $semillero = DB::table('semillero')->get();
        $coordinador = DB::table('coordinador')->get();
        $proyecto = DB::table('proyecto')->get();
        $evento = Evento::findOrFail($id);
        return view ('eventos.participar-ev', ['proyecto'=>$proyecto,'semillero'=>$semillero, 'coordinador'=>$coordinador, 'evento'=>$evento]);
    }

    public function reg_participacion(Request $r){
        $participante = new Participante();

        $participante->id_proyecto = $r->input('proyecto_particip');
        $participante->id_evento = $r->input('nom_ev');

        $participante->save();

        return redirect()->route('ver-eventos');
    }
}
