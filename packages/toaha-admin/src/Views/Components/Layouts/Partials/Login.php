<?php

namespace Btal\BtalLimitless\Views\Components\Layouts\Partials;

use Illuminate\View\Component;

class Login extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('btal-limitless::layouts.partials.login');
    }
}
