<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public $bgColour;
    public $iconColor;
    public $icon;
    public $stat;
    public $description;

    public function __construct($bgColour,$iconColor, $icon, $stat, $description)
    {
        $this->bgColour = $bgColour;
        $this->iconColor = $iconColor;
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