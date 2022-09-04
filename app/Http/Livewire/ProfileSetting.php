<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class ProfileSetting extends Component
{
    public $description;
    public $country;
    public $city;

    public $rules = [
        'description' => ['nullable', 'string', 'max:500'],
        'country' => ['nullable', 'string', 'max:255'],
        'city' => ['nullable', 'string', 'max:255'],
    ];

    public function mount()
    {
        $setting = Setting::where('user_id', '=', Auth()->user()->id)->first();

        $this->description = $setting->description;
        $this->country = $setting->country;
        $this->city = $setting->city;

    }

    public function submit()
    {
        $this->validate();

        $setting = Setting::where('user_id', '=', Auth()->user()->id)->first();
        $setting->description = $this->description;
        $setting->country = $this->country;
        $setting->city = $this->city;

        if($setting->isClean()){
            session()->flash('message_update', 'Everything up to date!');
        }else{
            $setting->save();
            session()->flash('message_update', 'Your informations have been updated!');
        }
    }

    public function render()
    {
        return view('livewire.profile-setting');
    }
}
