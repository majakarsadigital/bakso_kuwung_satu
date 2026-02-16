<?php

namespace App\View\Components\Admin\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DrinkTable extends Component
{
    public $drinkMenu;

    /**
     * Create a new component instance.
     */
    public function __construct($drinkMenu)
    {
        $this->drinkMenu = $drinkMenu;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.menu.drink-table');
    }
}
