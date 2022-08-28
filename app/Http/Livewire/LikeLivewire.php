<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Image;
use Livewire\Component;

class LikeLivewire extends Component
{
    public $image;
    public int $count;
    public bool $isLiked;

    public function mount(Image $image)
    {
        $this->image = $image;
        $this->count = $image->likes->count();

        if (Like::where('user_id', '=' , Auth()->user()->id)->where('image_id', '=', $this->image->id)->exists()) {
            $this->isLiked = true;
        }else{
            $this->isLiked = false;
        }
    }

    public function like()
    {
        if(!$this->isLiked){
            Like::create([
                'user_id' => Auth()->user()->id,
                'image_id' => $this->image->id
            ]);
            $this->count ++;
            $this->isLiked = true;
        }else{
            Like::where('user_id', '=' , Auth()->user()->id)->where('image_id', '=', $this->image->id)->delete();
            $this->count --;
            $this->isLiked = false;
        }

    }

    public function render()
    {
        return view('livewire.like-livewire');
    }
}
