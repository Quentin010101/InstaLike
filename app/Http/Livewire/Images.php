<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Images extends Component
{   
    use WithFileUploads;

    public $image;
    public $description;
    public $tags;
    public $tag = [];

    public function mount()
    {
        $this->tags = Tag::all();
    }

    protected $rules = [
        'image' => 'required',
        'description' => 'required',
    ];

    public function reload()
    {
        // delete flash message
    }

    public function upload()
    {
        $this->validate();

        foreach($this->tag as $tag):
        if(!Tag::where('id', $tag)->exists()){
            return;
        }
        endforeach;


        $path = $this->image->store('Image','public');

        $user = Auth::user();
        $image = Image::create([
            'path' => $path,
            'description' => $this->description,
            'user_id' => $user->id,
        ]);

        foreach($this->tag as $tag):
            DB::table('image_tag')->insert([
                'image_id' => $image->id,
                'tag_id' => $tag
            ]);
        endforeach;


        session()->flash('message_validation', 'Your image as been uploaded!');
        unset($this->image);
        unset($this->description);
        unset($this->tag);

    }

    public function render()
    {
        return view('livewire.images');
    }
}
