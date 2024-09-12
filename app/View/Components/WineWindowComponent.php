<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WineWindowComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $wine;
    public function __construct($wine)
    {
        $this->wine = $wine;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.wine_window');
    }
}
