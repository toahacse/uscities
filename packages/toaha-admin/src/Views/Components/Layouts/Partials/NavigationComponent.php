<?php

namespace Toaha\Admin\AdminLTE\Views\Components\Layouts\Partials;

use Illuminate\View\Component;
use Route;

class NavigationComponent extends Component
{

    public $include, $dropKey, $sidebarHtml = "";

    public function __construct()
    {
        $this->routeArray();
        $actionName   = '\Illuminate\Routing\ViewController';
        $actionArray  = array_map('strtolower', explode('\\', $actionName));
        $sidebarArray = config("navigation");
        if (!is_null($sidebarArray) && count($sidebarArray)) {
            $this->triggerSidebarArray($actionArray, $sidebarArray);
        }
    }

    private function routeArray(): void
    {
        $routes = Route::getRoutes();
        $this->routeArray = collect($routes)->map(function($value) {
            $array = [];
            $actionName             = $value->getActionName();
            $array['action']        = substr($actionName, strpos($actionName, '@') + 1);
            $array['controller']    = substr($actionName, strrpos($actionName, '\\') + 1, -(strlen($array['action']) + 1));
            $array['url']           = $value->uri;
            return $array;
        });
    }

    private function triggerSidebarArray($actionArray, $sidebarArray)
    {
        $sidebarArray = collect($sidebarArray)->sortBy('priority');

        foreach ($sidebarArray as $key => $sidebar) {
            if(in_array(strtolower($key), $actionArray) || ( isset($sidebar['joint_view']) && $sidebar['joint_view'] )) {
                $this->dropKey = $key;
                $this->triggerDisburse($sidebar);
            }
        }
        
    }

    private function triggerDisburse(array $sidebar)
    {
        if(array_key_exists("include", $sidebar)) {
            $this->include = $sidebar["include"];
            return true;
        } 
        else {
            // $ifJointView = $this->ifJointView($sidebar);
            // $this->sidebarHtml .= $this->{is_null($ifJointView) ? 'loopDisburse' : 'dropdownHtml'}($ifJointView ?? $sidebar);
            $this->sidebarHtml .= $this->loopDisburse($sidebar);
        }
    }

    private function ifJointView($sidebar)
    {
        if(isset($sidebar['joint_view']) && $sidebar['joint_view']) {
            $dropArray['text']      = ucwords($this->dropKey);
            $dropArray['icon']      = 'fas fa-arrows-alt pt-1';
            $dropArray['child']     = $sidebar['menus'] ;
        }
        return $dropArray ?? null;
    }

    private function loopDisburse($sidebar)
    {
        $sidebarHtml = "";
        $sidebarArray = collect($sidebar['menus'] ?? $sidebar)->sortBy('priority', SORT_NATURAL);
        foreach ($sidebarArray['menus'] ?? $sidebarArray as $array)
        {
            if (isset($array['child']) && count($array['child'])) {
                $sidebarHtml .= $this->dropdownHtml($array);
            }
            else {
                $sidebarHtml .= $this->linkHtml($array);
            }
        }

        return $sidebarHtml;
    }

    private function linkHtml($req)
    {
        if(isset($req['header']) && array_key_exists('header', $req)) {
            return $this->header($req['header']);
        }

        $url   = isset($req['url']) ? url($req['url']) : null;
        $route = isset($req['route']) ? route($req['route']) : null;
        $link  = $route ?? $url;
        $icon  = isset($req['icon']) ? "<i class=\"".$req["icon"]."\"></i>" : "";
        $text  = isset($req['text']) ? $req['text'] : null ;

        return <<<HTML
                    <li class="nav-item">
                        <a href="$link" class="nav-link">
                            $icon
                            <p>
                                $text
                            </p>
                        </a>
                    </li>
                HTML;
    }

    private function header($header)
    {
        return <<<HTML
                    <li class="nav-header user-panel">$header</li>
                HTML;
    }

    private function dropdownHtml($downArray)
    {
        $icon   = $downArray['icon'] ? "<i class=\"".$downArray["icon"]."\"></i>" : "";

        $dropdownHtml = "";

        $dropdownHtml .=  <<<HTML
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    $icon
                                    <p>
                                        $downArray[text]
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                            HTML;
        
        $dropdownHtml .= $this->loopDisburse($downArray['child']);

        $dropdownHtml .= "</ul></li>";

        return $dropdownHtml;
                
    }
    
    public function render()
    {
        if (!is_null($this->include) && view()->exists($this->include)) {
            return view($this->include);
        }
        return view('toaha-admin::layouts.partials.navigation');
    }
}
