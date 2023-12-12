<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextArea extends Component
{
    public $name;
    public $placeholder;

    public $disabled;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $placeholder = '', $disabled = false, $value = '')
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->vaue = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-area');
    }
}
