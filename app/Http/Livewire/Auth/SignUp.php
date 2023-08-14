<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $nombre = '';
    public $cedula = '';
    public $correo = '';
    public $contraseña = '';
    public $tipo = '';

    protected $rules = [
        'nombre' => 'required|min:3',
        'cedula' => 'required|max:15',
        'correo' => 'required|correo:rfc,dns|unique:users',
        'contraseña' => 'required|min:6',
        'tipo' => 'required'
    ];

    

    public function register() {
        $this->validate();
        $user = User::create([
            'nombre' => $this->nombre,
            'cedula' => $this->cedula,
            'correo' => $this->correo,
            'contraseña' => Hash::make($this->contraseña),
            'tipo' => $this->tipo,
        ]);

        //auth()->login($user);

        return redirect('/laravel-user-management');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
