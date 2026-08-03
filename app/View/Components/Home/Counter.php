<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Counter extends Component
{
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

    public function render(): View|Closure|string
    {
        return view('components.home.counter');
    }
}
