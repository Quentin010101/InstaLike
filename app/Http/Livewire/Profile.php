<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Profile extends Component
{

    use WithFileUploads;
    
    public $lastname; 
    public $name; 
    public $pseudo;
    public $message_update;
    public $avatar;
    public $avatar_url;

    protected function rules()
    {
        $user = User::find( Auth::user()->id);

        return [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'pseudo' => ['string', 'max:255', 'unique:settings,pseudo,' . $user->settings->id],
            
        ];
    }

    public function mount()
    {
        $user = User::find( Auth::user()->id);
        $this->lastname = $user->lastname;
        $this->name = $user->name;
        $this->pseudo = $user->settings->pseudo;
        $this->avatar_url = $user->settings->avatar;
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

    public function submit()
    {
        $this->validate();

        $user = User::find(Auth::user()->id);
        $settings = Setting::where('user_id', '=', $user->id)->first();

        $user->name = $this->name;
        $user->lastname = $this->lastname;
        $settings->pseudo = $this->pseudo;

        if($user->isClean() && $settings->isClean()){
            $this->message_update = '';
        }

        if($user->isDirty()){
            $user->save();
            $this->message_update = 'Your informations have been updated';
        }

        if($settings->isDirty()){
            $settings->save();
            $this->message_update = 'Your informations have been updated';
        }

        $this->emit('update_aside');

    }

    public function render()
    {
        return view('livewire.profile');
    }
}
