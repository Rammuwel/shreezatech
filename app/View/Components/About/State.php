<?php

namespace App\View\Components\About;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class State extends Component
{
    /**
     * Create a new component instance.
     */

    public array $stats = [

        [
            "icon" => "fa-solid fa-diagram-project",
            "count" => 50,
            "suffix" => "+",
            "label" => "Projects Completed",
        ],

        [
            "icon" => "fa-solid fa-users",
            "count" => 30,
            "suffix" => "+",
            "label" => "Happy Clients",
        ],

        [
            "icon" => "fa-solid fa-award",
            "count" => 5,
            "suffix" => "+",
            "label" => "Years Experience",
        ],

        [
            "icon" => "fa-solid fa-star",
            "count" => 98,
            "suffix" => "%",
            "label" => "Client Satisfaction",
        ],

    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.state');
    }
}
