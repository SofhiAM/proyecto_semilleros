<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Eventos extends Controller
{

    public User $user;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;
    
    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc,dns',
        'user.phone' => 'max:10',
        'user.about' => 'max:200',
        'user.location' => 'min:3'
    ];
    
    public function index(){
        $eventos = DB::table('evento')->get();
        return view ('eventos.listado', ['eventos' => $eventos]);
    }

    public function form_eventos(){
        return view('eventos.registrar-ev');
    }
}
