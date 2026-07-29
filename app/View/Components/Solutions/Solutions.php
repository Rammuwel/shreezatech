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
            'image' => 'images/solutions/healthcare.png',
            'description' => 'Smart healthcare solutions.'
        ],

        [
            'title' => 'Education',
            'image' => 'images/solutions/education.png',
            'description' => 'Digital learning platforms.'
        ],

        [
            'title' => 'Finance',
            'image' => 'images/solutions/finance.png',
            'description' => 'Secure financial software.'
        ],

        [
            'title' => 'Retail',
            'image' => 'images/solutions/retail.png',
            'description' => 'Digital commerce solutions.'
        ],

        [
            'title' => 'Logistics',
            'image' => 'images/solutions/logistic.png',
            'description' => 'Supply chain automation.'
        ],

        [
            'title' => 'Manufacturing',
            'image' => 'images/solutions/manufacturing.png',
            'description' => 'Industry 4.0 solutions.'
        ],

        [
            'title' => 'Real Estate',
            'image' => 'images/solutions/realstate.png',
            'description' => 'Property management systems.'
        ],

        [
            'title' => 'Government',
            'image' => 'images/solutions/goverment.png',
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
