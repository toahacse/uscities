<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Buttons;

use Illuminate\View\Component;

class ActionBtnViewComponent extends Component
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
        ,$color      = 'info'
        ,$text_color = 'light'
        ,$tooltip    = 'View'
        ,$title      = false
        ,$icon       = 'eye'
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
        return view('toaha-admin::buttons.action-btn-view');
    }
}
