<?php

namespace App\View\Components\inputs;

use Illuminate\View\Component;

class text extends Component
{
    public $name;
    public $placeholder;
    public $value;
    public $type;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $placeholder, $value, $type, $label)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->type = $type;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.text');
    }
}
