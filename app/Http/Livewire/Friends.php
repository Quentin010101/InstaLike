<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Friends extends Component
{
    public $friends;
    public array $arrayId = [];
    public $listeners = ['renderFriends'];

    public function mount()
    {
        $is = Auth::user()->friends()->where('status', 'accepted')->get();
        $is = $is->unique();
        $this->friends = $is;
        foreach($is as $i):
            array_push($this->arrayId, $i->id);
        endforeach;
    }

    public function renderFriends()
    {
        $this->mount();
        $this->render();
    }

    public function invalid($id)
    {
        if(!in_array($id, $this->arrayId)):
            return;
        endif;

        $friends = DB::table('user_friends')
        ->where('user_id', Auth::user()->id)
        ->where('friend_id', $id)->update(['status' => 'declined']);

        $this->mount();

    }

    public function render()
    {
        return view('livewire.friends');
    }
}
