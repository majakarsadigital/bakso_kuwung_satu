<?php

namespace App\View\Components\Admin\Package;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PackageTable extends Component
{
    public $package;

    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct($package, $menus)
    {
        $this->menus = $menus;
        $this->package = $package;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.package.package-table');
    }
}
