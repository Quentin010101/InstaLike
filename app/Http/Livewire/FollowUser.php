<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FollowUser extends Component
{
    public $user;
    public $followed;

    public function mount()
    {
        $user = Auth::user();

        $this->followed = false;

        if(DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $this->user->id)->exists()){
            $this->followed = true;
        }
    }

    public function follow()
    {
        $user = Auth::user();

        if(DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $this->user->id)->exists()){
            DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $this->user->id)->delete();
        }else{
            DB::table('user_follower')->insert([
                'follower_id' => $user->id,
                'following_id' => $this->user->id
            ]);
        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.follow-user');
    }
}
