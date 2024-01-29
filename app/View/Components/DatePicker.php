<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatePicker extends Component
{
    /**
     * Create a new component instance.
     */

     public $placeholder;
     public $name;
     public $value;

     public function __construct($placeholder, $name, $value = null)
     {
         $this->placeholder = $placeholder;
         $this->name = $name;
         $this->value = $value;
     }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.date-picker');
    }
}
