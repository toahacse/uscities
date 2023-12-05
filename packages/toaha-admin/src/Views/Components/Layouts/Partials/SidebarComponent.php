<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials;

use Illuminate\View\Component;

class SidebarComponent extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('toaha-admin::layouts.partials.sidebar');
    }
}
