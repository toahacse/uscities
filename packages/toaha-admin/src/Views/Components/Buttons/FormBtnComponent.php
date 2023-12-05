<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Buttons;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class FormBtnComponent extends Component
{
    public $type
           ,$id
           ,$bg
           ,$class
           ,$icon
           ,$float
           ,$title;

    public function __construct(
        $type = 'submit', 
        $icon = 'check', 
        $title = 'Save', 
        $float = 'right',
        $id = false, 
        $class = false, 
        $bg = 'success' )
    {
        $this->type   = $type;
        $this->id     = $id;
        $this->class  = $class;
        $this->icon   = $icon;
        $this->bg     = $bg;
        $this->float  = $float;
        $this->title  = $title;

        $themeName = Session::get("theme") ?? 'light';
        if ($themeName == 'dark') {
            $this->bg = "dark";
        }
    }
    
    public function render()
    {
        return view('toaha-admin::buttons.form-btn');
    }
}
