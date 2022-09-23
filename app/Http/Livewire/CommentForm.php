<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Image;
use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CommentForm extends Component
{
    public $comments;
    public $comment;
    public $image;
    public $count;
    public $isLiked;
    public $isCommented = false;

    protected $rules = [
        'comment' => 'required|max:300|string',
    ];

    public function mount(Image $image)
    {
        $this->image = $image;
        $this->comments = Comment::where('image_id', '=', $this->image->id)->get()->sortByDesc('created_at');
        $this->count = $image->likes->count();

        $this->isLiked = false;

        if(Auth::user()){
            if (Like::where('user_id', '=' , Auth()->user()->id)->where('image_id', '=', $this->image->id)->exists()) {
                $this->isLiked = true;
            }
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

    public function submit()
    {
        $this->isCommented = false;

        $this->validate();

        $comment = Comment::create([
            'comment' => $this->comment,
            'image_id' => $this->image->id,
            'user_id' => Auth()->user()->id,
        ]);

        $this->isCommented = true;

        $this->comments->prepend($comment);
        $this->comment = '';
        
    }
    public function render()
    {
        return view('livewire.comment-form');
    }
}
