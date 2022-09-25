<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class Img extends Component
{
    public $image;

    public function update()
    {
        $this->image = Image::inRandomOrder()->first();
    }

    public function render()
    {
        return view('livewire.img');
    }
}
