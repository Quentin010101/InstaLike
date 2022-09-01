<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Profile extends Component
{
    public $user; 

    public function mount()
    {
        $this->user = User::find( Auth::user()->id, ['id', 'email', 'name']);
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
