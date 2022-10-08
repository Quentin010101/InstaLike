<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Setting;
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
    public $friendList;

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
        // Retrieve user follower and user friend
        $user_follower = DB::table('user_follower')
                    ->where('follower_id', '=', $user->id)
                    ->pluck('following_id');
        $user_friend = DB::table('user_friends')
                    ->where('user_id', $user->id)
                    ->where('status', 'accepted')
                    ->pluck('friend_id');

        $followers = $user_follower->toArray();
        $settingsPublic = Setting::whereIn('user_id', $followers)->where('privacy', 'public')->pluck('user_id');            

        $array_follower = $settingsPublic->toArray();            
        $array_friend = $user_friend->toArray();            
        $id_array = array_unique(array_merge($array_follower, $array_friend));

        // Add user id
        array_push($id_array, $user->id);

        $images = Image::whereIn('user_id', $id_array)->orderByDesc('created_at')
        ->cursorPaginate(3, ['id', 'path', 'description', 'user_id', 'created_at'], 'cursor', Cursor::fromEncoded($this->nextCursor));

        $this->images->push(...$images->items());

        $friendList = $user->friends()->where('status', 'accepted')->pluck('friend_id')->toArray();
        $this->friendList = $friendList;

        if ($this->hasMorePages = $images->hasMorePages()) {
            $this->nextCursor = $images->nextCursor()->encode();
        }
    }

    public function render()
    {
        return view('livewire.card-container');
    }
}
