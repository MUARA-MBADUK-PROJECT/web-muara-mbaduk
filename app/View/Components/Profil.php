<?php

namespace App\View\Components;

use App\Service\ServiceAuth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profil extends Component
{
    /**
     * Create a new component instance.
     */

    private $authService;
    public function __construct()
    {
        //
        $this->authService = new ServiceAuth;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $request = request();
        $profil = $this->authService->getProfil($request);
        return view('components.profil',['profil'=>$profil]);
    }
}
