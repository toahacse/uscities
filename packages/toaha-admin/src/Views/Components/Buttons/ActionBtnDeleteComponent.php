<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Buttons;

use Illuminate\View\Component;

class ActionBtnDeleteComponent extends Component
{
    public $id
    ,$url
    ,$class
    ,$icon
    ,$tooltip
    ,$title;

public function __construct(
 $icon = 'trash', $url = false,
 $tooltip = false, $id = false,
 $class = false, $title = false 
 )
{
 $this->id = $id;
 $this->url = $url;
 $this->icon = $icon;
 $this->class = $class;
 $this->title = $title;
 $this->tooltip = $tooltip;
}

    public function render()
    {
        return view('toaha-admin::buttons.action-btn-delete');
    }
}
