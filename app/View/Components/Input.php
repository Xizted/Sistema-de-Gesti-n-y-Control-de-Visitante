<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $name;
    public $inputType;
    public $placeholder;
    public $labelText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $inputType,
        $placeholder,
        $labelText
    ) {
        $this->name = $name;
        $this->inputType = $inputType;
        $this->placeholder = $placeholder;
        $this->labelText = $labelText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
