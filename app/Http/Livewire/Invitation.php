<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Invitation extends Component
{
    public $invitation;

    public function mount()
    {
        $this->invitation = Auth::user()->friends->where('accepted', false)->first();
    }

    public function render()
    {
        dd($this->invitation->name);
        return view('livewire.invitation');
    }
}
