<?php

namespace App\View\Components\links;

use Illuminate\View\Component;

class back_to_home_page extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.back_to_home_page');
    }
}
