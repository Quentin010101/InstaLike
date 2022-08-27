<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class LikeLivewire extends Component
{
    public $image;
    public int $count;

    public function mount(Image $image)
    {
        $this->image = $image;
        $this->count = $image->like;
    }

    public function like()
    {
        $this->count ++;
        $img = $this->image::find($this->image->id);
        $img->like = $this->count;
        $img->save();
    }

    public function render()
    {
        return view('livewire.like-livewire');
    }
}
