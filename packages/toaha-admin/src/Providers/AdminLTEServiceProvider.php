<?php

namespace Toaha\Admin\AdminLTE\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminLTEServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadComponents();

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'toaha-admin');

    }

    public function register(): void
    {
        $this->publishable();
    }

    private function publishable(){
        $this->publishes([
            __DIR__ . '/../../publishable/assets' => public_path('vendor/toaha/admin/assets'),

            __DIR__.'/../config/navigation.php'   => config_path('navigation.php'),

            __DIR__.'/../Resources/views/elements/navigation.blade.php' => resource_path('views/vendor/toaha-admin/layouts/navigation.blade.php'), 
        ], 'toaha-admin');

    }


    private function loadComponents()
    {
        Blade::component('toaha-admin-master', \Toaha\Admin\AdminLTE\Views\Components\Layouts\MasterLayout::class);
        Blade::component('toaha-admin-allcss', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\AllcssComponent::class);
        Blade::component('toaha-admin-alljs', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\AlljsComponent::class);
        Blade::component('toaha-admin-title', \Toaha\Admin\AdminLTE\Views\Components\Elements\TitleComponent::class);
        Blade::component('toaha-admin-favicon', \Toaha\Admin\AdminLTE\Views\Components\Elements\FaviconComponent::class);
        Blade::component('toaha-admin-header', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\HeaderComponent::class);
        Blade::component('toaha-admin-sidebar', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\SidebarComponent::class);
        Blade::component('toaha-admin-footer', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\FooterComponent::class);
        Blade::component('toaha-admin-content-header', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\ContentHeaderComponent::class);
        Blade::component('toaha-admin-pl-navigation', \Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials\NavigationComponent::class);
        Blade::component('toaha-admin-navigation', \Toaha\Admin\AdminLTE\Views\Components\Elements\NavigationComponent::class);
        Blade::component('toaha-admin-myaccount', \Toaha\Admin\AdminLTE\Views\Components\Elements\MyAccountComponent::class);

        // Button Component
        Blade::component('toaha-admin-btn', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnComponent::class);
        Blade::component('toaha-admin-btn-preview', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionPreviewComponent::class);
        Blade::component('toaha-admin-btn-create', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnCreateComponent::class);
        Blade::component('toaha-admin-btn-view', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnViewComponent::class);
        Blade::component('toaha-admin-btn-trash-list', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnTrashListComponent::class);
        Blade::component('toaha-admin-btn-tree', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnTreeComponent::class);
        Blade::component('toaha-admin-btn-edit', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnEditComponent::class);
        Blade::component('toaha-admin-btn-delete', \Toaha\Admin\AdminLTE\Views\Components\Buttons\ActionBtnDeleteComponent::class); 

    }
}
