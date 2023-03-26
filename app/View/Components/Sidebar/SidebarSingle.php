<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarSingle extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $isMainIcon;
    public $icon;
    public function __construct($title, $isMainIcon, $icon)
    {
        //
        $this->title = $title;
        $this->isMainIcon = $isMainIcon;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.sidebar-single');
    }
}
