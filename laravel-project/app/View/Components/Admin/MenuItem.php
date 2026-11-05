<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    public function __construct(
        public string $href,
        public string $label,
        public string $icon,
    )
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.admin.menu-item');
    }
}
