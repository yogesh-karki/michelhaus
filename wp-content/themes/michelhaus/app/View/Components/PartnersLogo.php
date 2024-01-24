<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PartnersLogo extends Component
{
    public  $partners;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->partners = get_sub_field( 'add_partner' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partners_logo');
    }
}
