<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Elements;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class MyAccountComponent extends Component
{
    private $navItems = null;
    private $myaccount_pic = "vendor/toaha/admin/assets/images/user-image.jpg";

    public function __construct()
    {
        $this->setMyAccImg();
        $this->navItems = [

            'myaccount' => [
                'profile' => ['label' => 'Profile', 'route' => Route::has('profile') ? route('profile') : "#", 'icon' => 'fas fa-user', 'badge' => ''],
                'change-password'   => [ 'label'=> 'Change Password' ,'route' => Route::has('change-password') ? route('change-password') : "#", 'icon' => 'fas fa-key', 'badge' => '' ],
            ]
        ];
    }

    private function setMyAccImg(): void
    {
        if (Schema::hasTable('organization_setups')) {
            $setup = DB::table('organization_setups')->where('key', 'myaccount')->first();
            if (!is_null($setup)) {
                $this->myaccount_pic = $setup->value;
            }
        }
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $myaccount_pic = $this->myaccount_pic;
        $myaccount_navItems = $this->navItems['myaccount'];
        return view('toaha-admin::elements.my-account', compact('myaccount_navItems', 'myaccount_pic'));
    }
}
