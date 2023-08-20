<?php

namespace App\Http\Semilleros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;
use App\Models\SemilleristasMod;
use App\Models\User;

class MiSemilleroCon extends Controller
{

    public function render($id)
    {
        $userID = auth()->id();
        
        $user = User::find($userID);
        $tipoUsuario = $user->tipo;
        $userced = $user->ced;
        if($tipoUsuario ==='Coordinador'){
            $id_sem = DB::table('semillero')->where('id_coordinador','=',$userced)->value('id_semillero');
            $semillero = SemilleroMod::findOrFail($id_sem);
            $coordinador = DB::table('coordinador')->where('id_coordinador',$userced)->value('nom_coordinador');
            return view('Semilleros.miSemillero',['semillero'=>$semillero, 'coordinador'=>$coordinador, 'user'=>$userced]);    
        }elseif ($tipoUsuario === 'Estudiante' || $tipoUsuario === 'Docente'){
            $id_sem = DB::table('semillerista')->where('id_semillerista',$userced)->value('id_semillero');
            $semillero=SemilleroMod::findOrFail($id_sem);
            $id_coor = Db::table('semillero')->where('id_semillero',$id_sem)->value('id_coordinador');
            $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
            return view('Semilleros.miSemillero',['semillero'=>$semillero, 'coordinador'=>$coordinador, 'user'=>$userced]);
        }
    }

    public function ver($id)
    {    
        $semillero=SemilleroMod::findOrFail($id);
        $id_coor = Db::table('semillero')->where('id_semillero',$id)->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.miSemillero',['semillero'=>$semillero, 'coordinador'=>$coordinador]);
    }

}
