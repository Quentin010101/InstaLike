<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FriendUser extends Component
{
    public $text;
    public $user;

    public function mount()
    {
        $auth = Auth::user();

        if(DB::table('user_friends')->where('user_id', $auth->id)->where('friend_id', $this->user->id)->exists()
         || DB::table('user_friends')->where('user_id', $this->user->id)->where('friend_id', $auth->id)->exists()){
            $this->text = true;
        }else{
            $this->text = false;
        }
    }

    public function add()
    {
        $auth = Auth::user();
        if(DB::table('user_friends')->where('user_id', $auth->id)->where('friend_id', $this->user->id)->exists()){
            DB::table('user_friends')->where('user_id', $auth->id)->where('friend_id', $this->user->id)->delete();
        }elseif(DB::table('user_friends')->where('user_id', $this->user->id)->where('friend_id', $auth->id)->exists()){
            DB::table('user_friends')->where('user_id', $this->user->id)->where('friend_id', $auth->id)->delete();
        }else{
            DB::table('user_friends')->insert([
                'user_id' => $this->user->id,
                'friend_id' => $auth->id,
                'status' => 'waiting'
            ]);
        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.friend-user');
    }
}
