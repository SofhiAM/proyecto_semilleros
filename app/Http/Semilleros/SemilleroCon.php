<?php

namespace App\Http\Semilleros;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;

class SemilleroCon extends Component
{
    public function render()
    {
        $semillero = DB::table('semillero')->get();
        $id_coor = DB::table('semillero')->value('id_coordinador');
        $coordinador = DB::table('coordinador')->where('id_coordinador',$id_coor)->value('nom_coordinador');
        return view('Semilleros.semillero',['semillero'=>$semillero, 'coordinador'=>$coordinador]);
    }

}
