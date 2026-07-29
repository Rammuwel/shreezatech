<?php

namespace App\View\Components\About;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Journy extends Component
{
    /**
     * Create a new component instance.
     */


    public array $journey = [

        [
            "year" => "2022",
            "title" => "Company Founded",
            "description" => "Started our journey with a vision to build innovative software solutions."
        ],

        [
            "year" => "2023",
            "title" => "First 30+ Projects",
            "description" => "Successfully delivered projects for startups and growing businesses."
        ],

        [
            "year" => "2024",
            "title" => "Expanded Our Team",
            "description" => "Built a talented team of designers, developers, and consultants."
        ],

        [
            "year" => "2025",
            "title" => "Global Clients",
            "description" => "Started working with international clients across multiple industries."
        ],

        [
            "year" => "2026",
            "title" => "Innovation Continues",
            "description" => "Focused on AI, cloud technologies, and scalable digital transformation."
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
        return view('components.about.journy');
    }
}
