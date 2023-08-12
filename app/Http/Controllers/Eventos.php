<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Eventos extends Controller
{
    public function index(){
        $eventos = DB::table('evento')->get();
        return view ('eventos.listado', ['eventos' => $eventos]);
    }
}
