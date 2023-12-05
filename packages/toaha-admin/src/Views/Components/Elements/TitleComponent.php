<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Elements;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TitleComponent extends Component
{
    public $title = "Toaha|Admin";
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        if (Schema::hasTable('organization_setups')) {
            $setup = DB::table('organization_setups')->where('key', 'title')->first();
            if(!is_null($setup)) {
                $this->title = $setup->value;
            }
        }
    }

    public function render()
    {
        return view('toaha-admin::elements.title');
    }
}
