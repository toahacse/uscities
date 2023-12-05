<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Buttons;

use Illuminate\View\Component;

class ActionBtnComponent extends Component
{
    public $href
            ,$id
           ,$class
           ,$color
           ,$text_color
           ,$tooltip
           ,$title
           ,$icon;

    public function __construct
    (
        $class       = false
        ,$id         = false
        ,$href       = '#'
        ,$color      = false
        ,$text_color = 'light'
        ,$tooltip    = false
        ,$title      = false
        ,$icon       = false
    )
    {
        $this->href       = $href;
        $this->id         = $id;
        $this->class      = $class;
        $this->color      = $color;
        $this->text_color = $text_color;
        $this->tooltip    = $tooltip;
        $this->title      = $title;
        $this->icon       = $icon;
    }
    
    public function render()
    {
        return view('toaha-admin::buttons.action-btn');
    }
}
