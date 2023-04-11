<?php

namespace App\View\Components\cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class News extends Component
{
    private $link,$title,$img,$summary,$release;
    /**
     * Create a new component instance.
     */
    public function __construct($link = "",$title="",$img="",$summary="",$release="")
    {
        //
        $this->link = $link;
        $this->title = $title;
        $this->img=$img;
        $this->summary=$summary;
        $this->release=$release;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $atributs = ['link'=>$this->link,'title'=>$this->title,'img'=>$this->img, 'summary'=>$this->summary,'release'=>$this->release];
        return view('components.cards.news',$atributs);
    }
}
