<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Follow extends Component
{
    public $image;
    public $follow = true;
    public $exist = true;
    public $listeners = ['updateFollow'];

    public function mount()
    {
        $user = Auth::user();

        $this->follow = false;

        $image = $this->image; 

        if($user->id == $image->user->id){
            $this->exist = false;
        }
        elseif( DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $image->user->id)->exists()){
            $this->follow = true;
        }

    }

    public function updateFollow()
    {
        $this->mount();
    }

    public function follow()
    {
        $image = $this->image;
        $user = Auth::user();

        if(DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $image->user->id)->exists()){
            DB::table('user_follower')->where('follower_id', $user->id)->where('following_id', $image->user->id)->delete();
            $this->follow = false;

        }else{
            DB::table('user_follower')->insert([
                'follower_id' => $user->id,
                'following_id' => $image->user->id
            ]);
            $this->follow = true;
        }

        $this->emitTo('follow', 'updateFollow');

    }

    public function render()
    {
        return view('livewire.follow');
    }
}
