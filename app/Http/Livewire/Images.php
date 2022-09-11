<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Images extends Component
{   
    use WithFileUploads;

    public $image;
    public $description;

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

        $path = $this->image->store('Image','public');

        $user = Auth::user();
        $image = Image::create([
            'path' => $path,
            'description' => $this->description,
            'user_id' => $user->id,
        ]);

        session()->flash('message_validation', 'Your image as been uploaded!');
        unset($this->image);
        unset($this->description);

    }

    public function render()
    {
        return view('livewire.images');
    }
}
