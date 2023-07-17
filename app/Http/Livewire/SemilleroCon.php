<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleroMod;

class SemilleroCon extends Component
{
    public function render()
    {
        $semillero = DB::table('semillero')->get();
        return view('livewire.semillero',['semillero'=>$semillero]);
    }
}
