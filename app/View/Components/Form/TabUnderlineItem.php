<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabUnderlineItem extends Component
{
    public $index;
    public $title;

    public function __construct($index = 1, $title)
    {
        $this->index = $index;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.tab-underline-item');
    }
}
