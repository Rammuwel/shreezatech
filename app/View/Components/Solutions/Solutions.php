<?php

namespace App\View\Components\Solutions;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Solutions extends Component
{
    /**
     * Create a new component instance.
     */

    public array $industries = [

        [
            'title' => 'Healthcare',
            'image' => 'images/solutions/shreeza-tech-healthcare-software-solution.webp',
            'description' => 'Smart healthcare solutions.'
        ],

        [
            'title' => 'Education',
            'image' => 'images/solutions/shreeza-tech-education-software-solution.webp',
            'description' => 'Digital learning platforms.'
        ],

        [
            'title' => 'Finance',
            'image' => 'images/solutions/shreeza-tech-finance-software-solution.webp',
            'description' => 'Secure financial software.'
        ],

        [
            'title' => 'Retail',
            'image' => 'images/solutions/shreeza-tech-retail-software-solution.webp',
            'description' => 'Digital commerce solutions.'
        ],

        [
            'title' => 'Logistics',
            'image' => 'images/solutions/shreeza-tech-logistics-software-solution.webp',
            'description' => 'Supply chain automation.'
        ],

        [
            'title' => 'Manufacturing',
            'image' => 'images/solutions/shreeza-tech-manufacturing-software-solution.webp',
            'description' => 'Industry 4.0 solutions.'
        ],

        [
            'title' => 'Real Estate',
            'image' => 'images/solutions/shreeza-tech-real-estate-software-solution.webp',
            'description' => 'Property management systems.'
        ],

        [
            'title' => 'Government',
            'image' => 'images/solutions/shreeza-tech-government-software-solution.webp',
            'description' => 'Digital governance platforms.'
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
        return view('components.solutions.solutions');
    }
}
