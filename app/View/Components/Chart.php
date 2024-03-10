<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Chart extends Component
{
    public $chartId;
    public $type;
    public $chartData;
    public $options;

    public function __construct($chartId, $type = 'bar', $chartData = [], $options = [])
    {
        $this->chartId = $chartId;
        $this->type = $type;
        $this->chartData = $chartData;
        $this->options = $options;
    }

    public function render(): View|Closure|string
    {
        return view('components.chart');
    }
}
