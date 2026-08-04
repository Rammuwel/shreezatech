<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
     public array $stats = [];
    public function __construct()
    {
          $this->stats = [
            ['count' => 50, 'suffix' => '+', 'label' => 'Projects Delivered', 'icon' => 'fa-solid fa-rocket'],
            ['count' => 30, 'suffix' => '+', 'label' => 'Happy Clients', 'icon' => 'fa-solid fa-face-smile'],
            ['count' => 5, 'suffix' => '+', 'label' => 'Years of Experience', 'icon' => 'fa-solid fa-award'],
            ['count' => 98, 'suffix' => '%', 'label' => 'Client Satisfaction', 'icon' => 'fa-solid fa-thumbs-up'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.hero');
    }
}
