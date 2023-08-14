<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    protected $users;
    public function mount()
    {
        $this->users = User::paginate(10);
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        
        if (env('IS_DEMO')) {
            // Mostrar notificación de demo si es necesario
            // ...
        } else {
            $user->delete();
            // Actualizar la lista de usuarios después de la eliminación
            $this->users = User::paginate(10);
        }
    }    
    public function render()
    {
        return view('livewire.laravel-examples.user-management', [
            'users' => $this->users,
        ]);
    }
}
