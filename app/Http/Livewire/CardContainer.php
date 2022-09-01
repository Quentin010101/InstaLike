<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Illuminate\Pagination\Cursor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class CardContainer extends Component
{
    public $images;
    public $nextCursor;
    public $hasMorePages;

    public function mount()
    {
        $this->images = new Collection();

        $this->loadImages();
    }

    public function loadImages()
    {
        $user = Auth::user();

        // Stop if no more images
        if ($this->hasMorePages !== null  && ! $this->hasMorePages) {
            return;
        }
        // Retrieve user follower
        $user_follower = DB::table('user_follower')->where('follower_id', '=', $user->id)->pluck('following_id');
        $id_array = $user_follower->toArray();

        // Add user id
        array_push($id_array, $user->id);

        $images = Image::whereIn('user_id', $id_array)->orderByDesc('created_at')
        ->cursorPaginate(3, ['id', 'path', 'description', 'user_id', 'created_at'], 'cursor', Cursor::fromEncoded($this->nextCursor));

        $this->images->push(...$images->items());

        if ($this->hasMorePages = $images->hasMorePages()) {
            $this->nextCursor = $images->nextCursor()->encode();
        }
    }

    public function render()
    {
        return view('livewire.card-container');
    }
}
