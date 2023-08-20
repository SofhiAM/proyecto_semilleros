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

}
