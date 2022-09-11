<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;

    public function render()
    {
        $users = Setting::where('pseudo', $this->search)->pluck('pseudo');

        return view('livewire.search-bar', [
            'users' => $users,
        ]);;
    }
}
