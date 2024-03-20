<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubSidebar extends Component
{
    public $alpineName;
    public $title;

    public function __construct($alpineName, $title)
    {
        $this->alpineName = $alpineName;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.sub-sidebar');
    }
}
