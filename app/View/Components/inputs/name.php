<?php

namespace App\View\Components\inputs;

use Illuminate\View\Component;

class name extends Component
{
    public $id;
    public $name;
    public $label;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $label, $placeholder)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.name');
    }
}
