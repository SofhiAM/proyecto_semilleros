<?php

namespace App\Http\Livewire\LaravelExamples;
use App\Models\User;

use Livewire\Component;

class UserEdit extends Component
{
    public User $user;
    public $userId;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;
    
    protected $rules = [
        'user.nombre' => 'max:40|min:3',
        'user.correo' => 'email:rfc,dns',
        'user.celular' => 'max:10',
        'user.cedula' => 'max:15'
    ];

    public function mount($userId) { 
        $this->user = User::findOrFail($userId); // Carga los datos del usuario con el ID correspondiente
    }

    public function save() {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {
            $this->validate();
            $this->user->save();
            $this->showSuccesNotification = true;

            return redirect('/laravel-user-management');
        }
    }
    
    public function render()
    {
        return view('livewire.laravel-examples.user-edit');
    }
}
