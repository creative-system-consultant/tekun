<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public $colour;
    public $icon;
    public $stat;
    public $description;

    public function __construct($colour, $icon, $stat, $description)
    {
        $this->colour = $colour;
        $this->icon = $icon;
        $this->stat = $stat;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.stat-card');
    }
}
