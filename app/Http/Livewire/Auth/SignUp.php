<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $name = '';
    public $ced = '';
    public $email = '';
    public $password = '';
    public $tipo = '';

    protected $rules = [
        'name' => 'required|min:3',
        'ced' => 'required|max:15',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6',
        'tipo' => 'required'
    ];

    

    public function register() {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'ced' => $this->ced,
            'email' => $this->email,
            'password' => Hash::make($this->password),
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
