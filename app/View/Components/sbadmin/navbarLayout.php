<?php

namespace App\View\Components\sbadmin;

use Illuminate\View\Component;

class navbarLayout extends Component
{
    public $totalNotif;

    public function __construct($totalNotif)
    {
        $this->totalNotif = $totalNotif;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sbadmin.navbar-layout');
    }
}
