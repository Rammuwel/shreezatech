<?php

namespace App\View\Components\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Features extends Component
{
    /**
     * Create a new component instance.
     */
    public array $features = [

        [
            'icon' => 'fa-user-tie',
            'title' => 'Expert Team',
            'description' => 'Skilled professionals with years of industry experience.'
        ],

        [
            'icon' => 'fa-gem',
            'title' => 'On-Time Delivery',
            'description' => 'We deliver projects on time, every time.'
        ],

        [
            'icon' => 'fa-shield-halved',
            'title' => 'Quality Assurance',
            'description' => 'Rigorous testing ensures every solution meets the highest standards.'
        ],

        [
            'icon' => 'fa-headset',
            'title' => '24/7 Support',
            'description' => 'Our dedicated support team is always ready to help.'
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
        return view('components.services.features');
    }
}
