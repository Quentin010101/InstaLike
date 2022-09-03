<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Image;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Aside extends Component
{
    protected $listeners = ['update_aside' => 'render'];

    public function render()
    {
        $id = Auth()->user()->id;

        return view('livewire.aside', [
            'user' => User::find(Auth()->user()->id, ['name', 'lastname']),
            'settings' => Setting::where('user_id', '=', $id )->first(),
            'images_count' => Image::where('user_id', '=', $id)->get()->count(),
            'followers_count' => DB::table('user_follower')->where('follower_id', '=', $id)->get()->count(),
            'followings_count' => DB::table('user_follower')->where('following_id', '=', $id)->get()->count(),

        ]);
    }
}
