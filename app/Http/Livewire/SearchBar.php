<?php

namespace App\Http\Livewire;

use App\Models\Tag;
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
            $tags = [];
        }else{
            $users = Setting::where('pseudo', 'like',  '%' . $this->search . '%')->limit(5)->get();
            $tags = Tag::where('tag', 'like',  '%' . $this->search . '%')->limit(5)->get();
        }
        return view('livewire.search-bar', [
            'users' => $users,
            'tags' => $tags,
        ]);;
    }
}
