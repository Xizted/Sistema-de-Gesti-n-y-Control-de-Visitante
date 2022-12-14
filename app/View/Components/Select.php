<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{

    public $name;
    public $options;
    public $labelText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $labelText)
    {
        $this->name = $name;
        $this->options = $options;
        $this->labelText = $labelText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
