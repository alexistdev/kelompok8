<?php

namespace App\View\Components\sbadmin;

use Illuminate\View\Component;

class sidebarLayout extends Component
{
    public $tagSubMenu;

    public function __construct($tagSubMenu)
    {
       $this->tagSubMenu = $tagSubMenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sbadmin.sidebar-layout');
    }
}
