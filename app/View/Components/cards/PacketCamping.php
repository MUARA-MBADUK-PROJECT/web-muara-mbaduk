<?php

namespace App\View\Components\cards;

use Closure;
use Illuminate\Console\View\Components\Component;
use Illuminate\Contracts\View\View;

class PacketCamping extends Component
{
    /**
     * Create a new component instance.
     */
    private String $packetId;
    private String $packetName;
    private float $packetPrice;


    /**
     * @param String $id
     * @param String $Name
     * @param float $price
     *
     */
    public function __construct(string $packetId, string $name, float $price)
    {
        $this->packetId = $packetId;
        $this->packetName = $name;
        $this->packetPrice = $price;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.packet-camping');
    }
}
