<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PinesCard extends Component
{
    public $title;
    public $image;
    public $description;
    public $buttonText;
    public $buttonUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image, $description, $buttonText, $buttonUrl = '#')
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->buttonUrl = $buttonUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pines-card');
    }
}
