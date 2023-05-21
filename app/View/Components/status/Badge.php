<?php

namespace App\View\Components\status;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * Create a new component instance.
     */
    protected $status;
    public function __construct($status)
    {
        //
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.status.badge',['status'=>$this->status]);
    }
}
