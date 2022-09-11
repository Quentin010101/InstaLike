<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Invitations extends Component
{
    public $invitations_recieved;
    public $arrayId = [];
    public $invitation;
    
    public function mount()
    {   $is = Auth::user()->friends()->where('status', 'waiting')->get();
        if($is->isEmpty()){
            $this->emitTo('invitation-notification', 'renderNotification');
        }
        $is = $is->unique();
        $this->invitations_recieved = $is;
        foreach($is as $i):
            array_push($this->arrayId, $i->id);
        endforeach;
    }

    public function valid($id)
    {
        if(!in_array($id, $this->arrayId)):
            return;
        endif;

        $invitation = DB::table('user_friends')
        ->where('user_id', Auth::user()->id)
        ->where('friend_id', $id)->update(['status' => 'accepted']);

        $this->mount();
        $this->emitTo('friends', 'renderFriends');
    }

    public function invalid($id)
    {
        if(!in_array($id, $this->arrayId)):
            return;
        endif;

        $invitation = DB::table('user_friends')
        ->where('user_id', Auth::user()->id)
        ->where('friend_id', $id)->update(['status' => 'declined']);

        $this->mount();
    }

    public function render()
    {
        return view('livewire.invitations');
    }
}
