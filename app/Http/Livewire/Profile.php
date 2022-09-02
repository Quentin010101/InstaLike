<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Profile extends Component
{
    public $lastname; 
    public $name; 
    public $pseudo;
    public $message_update;

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

        

    }

    public function render()
    {
        return view('livewire.profile');
    }
}
