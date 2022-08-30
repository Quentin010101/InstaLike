<?php

namespace App\View\Components\dashbord;

use Illuminate\View\Component;

class feed_main extends Component
{
    public $all_images;
    public $nextCursor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nextCursor)
    {
        $this->nextCursor = $nextCursor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashbord.feed_main');
    }
}
