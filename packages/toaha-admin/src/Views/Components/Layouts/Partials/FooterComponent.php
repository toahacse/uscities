<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FooterComponent extends Component
{
    
    public function render()
    {
        return view('toaha-admin::layouts.partials.footer');
    }
}
