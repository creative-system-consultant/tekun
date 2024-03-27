<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCardMain extends Component
{
    public $title;
    public $no;
    public $desc;

    public function __construct($title, $no, $desc)
    {
        $this->title = $title;
        $this->no = $no;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.stat-card-main');
    }
}
