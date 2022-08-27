<?php

namespace App\View\Components\links;

use Illuminate\View\Component;

class nav extends Component
{
    public $name;
    public $url;
    public $isActive;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $url, $isActive)
    {

        $this->name = $name;
        $this->url = $url;
        $this->isActive = $isActive;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.nav');
    }
}
