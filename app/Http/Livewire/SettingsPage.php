<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SettingsPage extends Component
{
    public $privacy;

    public function mount()
    {
        $this->privacy = Auth::user()->settings->privacy;
    }

    public function submit(){
        $setting = Setting::where('user_id', '=', Auth::user()->id )->first();
        $setting->privacy = $this->privacy;

        if($setting->isDirty()){
            $setting->save();
            session()->flash('message_privacy', 'Your informations have been updated!');
        }else{
            session()->flash('message_privacy', 'Everything up to date!');
        }
    }

    public function render()
    {
        return view('livewire.settings-page');
    }
}
