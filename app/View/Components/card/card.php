<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class card extends Component
{
    public $image;
    public $friendList;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $friendList)
    {
        $this->image = $image;
        $this->friendList = $friendList;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card');
    }
}
