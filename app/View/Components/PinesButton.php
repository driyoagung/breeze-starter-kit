<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PinesButton extends Component
{

    public $type;
    public $color;
    public $text;
    public function __construct($type = 'button', $color = 'neutral', $text = 'Button')
    {
        $this->type = $type;
        $this->color = $color;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pines-button');
    }
}
