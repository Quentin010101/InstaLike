<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InvitationNotification extends Component
{
    public $notification;
    public $listeners = ['renderNotification'];

    public function mount()
    {
        $notification = DB::table('user_friends')
                        ->where('user_id', Auth::user()->id)
                        ->where('status', 'waiting')
                        ->get();

        if($notification->isEmpty()):
            $this->notification = false;
        else:
            $this->notification = true;
        endif;
    }

    public function renderNotification()
    {
        $this->mount();
        $this->render();
    }

    public function render()
    {
        return view('livewire.invitation-notification');
    }
}
