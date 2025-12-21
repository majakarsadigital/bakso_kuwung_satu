<?php

namespace App\View\Components\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FoodCard extends Component
{
    public $foodMenu;
    /**
     * Create a new component instance.
     */
    public function __construct($foodMenu)
    {
        $this->foodMenu = $foodMenu;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.food-card');
    }
}
