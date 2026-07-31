<?php

namespace App\View\Components\About;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Team extends Component
{
    /**
     * Create a new component instance.
     */

    public array $team = [

        [
            "name" => "Ram Muwel",
            "position" => "Founder & CEO",
            "image" => "images/team/ram.png",
            "linkedin" => "#",
            "twitter" => "#",
        ],

        [
            "name" => "Lokendra Jatav",
            "position" => "Co-founder & CTO",
            "image" => "images/team/loken2.png",
            "linkedin" => "#",
            "twitter" => "#",
        ],

        [
            "name" => "Priya Singh",
            "position" => "Head of Engineering",
            "image" => "images/team/ananya.png",
            "linkedin" => "#",
            "twitter" => "#",
        ],

        [
            "name" => "Neha Verma",
            "position" => "Head of Marketing",
            "image" => "images/team/priya.png",
            "linkedin" => "#",
            "twitter" => "#",
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
        return view('components.about.team');
    }
}
