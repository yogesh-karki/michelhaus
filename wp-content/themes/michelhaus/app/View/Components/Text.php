<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Text extends Component
{
    public  $text_left, $text_right, $btn_title, $btn_link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->text_left = get_sub_field( 'text_left' );
        $this->text_right = get_sub_field( 'text_right' );
        $this->btn_title = get_sub_field( 'button_title' );
        $this->btn_link = get_sub_field( 'button_link' );
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text');
    }
}
