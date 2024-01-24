<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageSlider extends Component
{
    public $image_caption;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->image_caption = get_sub_field( 'image_caption' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image_slider');
    }
}
