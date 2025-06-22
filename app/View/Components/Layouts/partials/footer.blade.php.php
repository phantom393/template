<?php

namespace App\View\Components\Layouts\partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer.blade.php extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.partials.footer.blade.php');
    }
}
