<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectBox extends Component
{
    /**
     * Create a new component instance.
     */
    public $value;
    public $name;
    public $placeholder;
    public $values;
    public function __construct($value, $name, $placeholder, $values = [])
    {
        $this->value = $value;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-box');
    }
}
