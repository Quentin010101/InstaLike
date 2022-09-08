<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Invitation extends Component
{
    public $invitations_recieved;
    public $invitation;
    public $friends;
    public $friend;

    public function mount()
    {
        $this->invitations_recieved = Auth::user()->friends()->where('status', 'waiting')->get();
        $this->friends = Auth::user()->friends()->where('status', 'accepted')->get();
    }

    public function valid()
    {
        dd($this->invitation);
        $invitation = DB::table('user_friends')
                    ->where('user_id', Auth::user()->id)
                    ->where('friend_id', $this->invitation->id)
                    ->first();

        $invitation->status = 'accepted';
        $invitation->save();
    }

    public function render()
    {
        return view('livewire.invitation');
    }
}
