<?php

namespace App\View\Components\dashbord;

use Illuminate\View\Component;

class feed_main extends Component
{
    public $all_images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($all_images)
    {
        $this->all_images = $all_images;

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
