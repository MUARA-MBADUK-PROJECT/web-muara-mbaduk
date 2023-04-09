<?php

namespace App\View\Components\cards;

use Closure;
use Illuminate\Contracts\View\View;

use Illuminate\View\Component;

class Packet extends Component
{

    private $packetId;
    private $packetName;
    private $packetPrice;
    private $packetImg;
    /**
     * Create a new component instance.
     */

    public function __construct($packetId="",$packetName="",$packetPrice=0,$packetImg="")
    {
        $this->packetId = $packetId;
        $this->packetName = $packetName;
        $this->packetPrice = $packetPrice;
        $this->packetImg = $packetImg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.packet',['packetId'=>$this->packetId,'packetName'=>$this->packetName,'packetPrice'=>$this->packetPrice,'packetImg'=>$this->packetImg]);
    }
}
