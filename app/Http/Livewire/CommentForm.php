<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $comments;
    public $comment;
    public $image;

    protected $rules = [
        'comment' => 'required|max:300|string',
    ];

    public function mount(Image $image)
    {
        $this->image = $image;
        $this->comments = Comment::where('image_id', '=', $this->image->id)->get()->sortByDesc('created_at');
    }

    public function submit()
    {
        $this->validate();

        $comment = Comment::create([
            'comment' => $this->comment,
            'image_id' => $this->image->id,
            'user_id' => Auth()->user()->id,
        ]);

        $this->comments->prepend($comment);
        $this->comment = '';
        
    }
    public function render()
    {
        return view('livewire.comment-form');
    }
}
