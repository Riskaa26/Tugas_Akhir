<?php

namespace App\View\Components\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $menu;
    public $header;

    public function __construct($menu = null, $header = null)
    {
        $this ->menu = $menu;
        $this -> header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.sidebar');
    }
}
