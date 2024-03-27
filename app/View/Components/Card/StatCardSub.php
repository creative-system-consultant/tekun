<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCardSub extends Component
{
    public $title;
    public $no;
    public $colour;

    public function __construct($title, $no, $colour)
    {
        $this->title = $title;
        $this->no = $no;
        $this->colour = $colour;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.stat-card-sub');
    }
}
