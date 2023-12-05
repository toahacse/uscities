<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Elements;

use Illuminate\View\Component;

class NavigationComponent extends Component
{
    private $navItems = null;

    public function __construct(){
        $this->navItems = [

            'myaccount' => [],
            'utility'=> [],
            'authorization' => [],
            'module' => [],
        ];
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('vendor.toaha-admin.layouts.navigation');
    }
}
