<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;

    public function clear()
    {
        $this->search = '';
    }

    public function render()
    {
        if($this->search === '' || $this->search === null){
            $users = [];
        }else{
            $users = Setting::where('pseudo', 'like',  '%' . $this->search . '%')->limit(5)->get();
        }
        return view('livewire.search-bar', [
            'users' => $users,
        ]);;
    }
}
