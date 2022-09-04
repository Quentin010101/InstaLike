<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class ProfileAvatar extends Component
{

    use WithFileUploads;
    

    public $avatar;
    public $avatar_url;



    public function mount()
    {
        $settings = Setting::where('user_id', '=', Auth()->user()->id)->first();
        $this->avatar_url = $settings->avatar;
    }

    public function avatar_upload()
    { 
        $this->validate([
            'avatar' => 'image|max:1024',
        ]);

        $path = $this->avatar->store('Avatar','public');
        $this->avatar_url = $path;

        $user = User::find(Auth::user()->id);
        $settings = Setting::where('user_id', '=', $user->id)->first();
        $settings->avatar = $path;
        $settings->save();

        unset($this->avatar);

        $this->emit('update_aside');
    }

    public function render()
    {
        return view('livewire.profile-avatar');
    }
}
