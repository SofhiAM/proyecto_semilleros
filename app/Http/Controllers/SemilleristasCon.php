<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;
use App\Models\SemilleristasMod;
use App\Models\userMod;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SemilleristasCon extends Controller
{
    public function render($id)
    {
        $semillero = SemilleroMod::findOrFail($id);
        $id_semillero = SemilleroMod::findOrFail($id)->value('id_semillero');
        $semillerista = DB::table('semillerista')->where('id_semillero',$id)->get();
        $id_coor = DB::table('semillero')->where('id_semillero',$id)->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.semilleristas',['semillero'=>$semillero, 'coordinador'=>$coordinador, 'semillerista'=>$semillerista]);
    }

    public function vincular()
    {    
        return view('Semilleros.agregarSemitas');
    }


    public function registrar(Request $r){
        $id=$r->input('semillero');
        $semillero = SemilleroMod::findOrFail($id);
        $semillerista = DB::table('semillerista')->where('id_semillero',$id)->get();
        $id_coor = DB::table('semillero')->where('id_semillero',$id)->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');


        $semillerista = new SemilleristasMod();
        $semillerista->cod_semillerista = $r->input('codsem');
        $semillerista->id_semillerista = $r->input('idsem');
        $semillerista->nom_semillerista = $r->input('nomsem');
        $semillerista->dir_semillerista = $r->input('dirsem');
        $semillerista->tel_semillerista = $r->input('telsem');
        $semillerista->correo_semillerista = $r->input('correosem');
        $semillerista->gen_semillerista = $r->input('gensem');
        $semillerista->semestre_semillerista = $r->input('semestre');
        $semillerista->foto_semillerista = $r->input('fotosem');
        $semillerista->reportemat_semillerista = $r->input('reporsem');
        $semillerista->prog_semillerista = $r->input('progsem');
        $semillerista->fecnac_semillerista = $r->input('fecnac');
        $semillerista->fecvinc_semillerista = $r->input('fecvinc');
        $semillerista->estado_semillerista = $r->input('estado');
        $semillerista->id_semillero = $r->input('semillero');
        $semillerista->save();

        return redirect()->route('semilleristas',$id);
    }

    public function credenciales($id)
    {    
        $semillerista = SemilleristasMod::findOrFail($id);
        return view('Semilleros.sign-up',['s'=>$semillerista]);
    }

    public function registro_credenciales(Request $r ,$id) {
        $semillerista = SemilleristasMod::findOrFail($id);
        $id_sem = DB::table('semillerista')->value('id_semillero',$id);
        $name=DB::table('semillerista')->where('id_semillerista',$id)->value('nom_semillerista');
        $email=DB::table('semillerista')->where('id_semillerista',$id)->value('correo_semillerista');
        
        $user = new User();
        $user->name = $name;
        $user->ced= $id;
        $user-> email=$email;
        $user ->password= Hash::make($r->password);
        $user->tipo='Estudiante';
        $user->save();
        return redirect()->route('semilleristas',$id_sem);
    }

    public function desvincularform($id)
    {    
        $semillerista = SemilleristasMod::findOrFail($id);
        return view('Semilleros.desvincularSemita',['s'=>$semillerista]);
    }

    public function desvincular(Request $r,$id)
    {    
        $semillerista = SemilleristasMod::findOrFail($id);
        $id_sem = DB::table('semillerista')->value('id_semillero',$id);
        $semillerista->estado_semillerista = $r->input('estado');
        $semillerista->save();
        return redirect()->route('semilleristas',$id_sem);
    }
}
