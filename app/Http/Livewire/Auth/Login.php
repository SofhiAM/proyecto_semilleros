<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $correo = '';
    public $contraseña = '';
    public $remember_me = false;

    protected $rules = [
        'correo' => 'required|email:rfc,dns',
        'contraseña' => 'required',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
        $this->fill(['correo' => 'admin@softui.com', 'contraseña' => 'secret']);
    }

    public function login() {
        $credentials = $this->validate();
        if(auth()->attempt(['correo' => $this->correo, 'contraseña' => $this->contraseña], $this->remember_me)) {
            $user = User::where(["correo" => $this->correo])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');        
        }
        else{
            return $this->addError('correo', trans('auth.failed')); 
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
