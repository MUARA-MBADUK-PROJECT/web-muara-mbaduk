<?php

namespace App\View\Components\parts;

use App\Repository\RepositoryPackage;
use App\Repository\RepositoryPages;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    private RepositoryPages $repoPages;
    private RepositoryPackage $repoPackage;
    public function __construct()
    {
        $this->repoPackage = new RepositoryPackage();
        $this->repoPages = new RepositoryPages();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pages = $this->repoPages->getAll();
        $packages = $this->repoPackage->getAll();
        // dd($pages);
        return view('components.parts.footer',[
            'pages'=>$pages,
            'packages'=>$packages
        ]);
    }
}
