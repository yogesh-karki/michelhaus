<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $emblems, $slider_images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->emblems = get_sub_field( 'emblem' );
        $this->slider_images = get_sub_field( 'hero_image' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return $this->view( 'components.hero' );
    }
}
