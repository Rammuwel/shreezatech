<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class services extends Component
{
    /**
     * Create a new component instance.
     */

    public array $services = [

        [
            'icon' => 'fa-solid fa-code',
            'title' => 'Web Development',
            'description' => 'Building Fast, Reactive, Secure & Scalable Web Applications',
            'color' => 'primary',
            'route' => 'web-development',
        ],

        [
            'icon' => 'fa-solid fa-cubes',
            'title' => 'Enterprise Applications',
            'description' => 'Scalable enterprise solutions to streamline your operations.',
            'color' => 'secondary',
            'route' => 'enterprise-application-development',
        ],

        [
            'icon' => 'fa-solid fa-brain',
            'title' => 'AI & Automation',
            'description' => 'Intelligent AI solutions to automate business processes.',
            'color' => 'primary',
            'route' => 'ai-automation',
        ],

        [
            'icon' => 'fa-solid fa-cloud',
            'title' => 'Cloud Engineering',
            'description' => 'Cloud-native solutions with AWS, Azure and DevOps.',
            'color' => 'secondary',
            'route' => 'cloud-solutions',
        ],

        [
            'icon' => 'fa-solid fa-mobile-screen-button',
            'title' => 'Mobile Applications',
            'description' => 'Native and cross-platform mobile apps for Android & iOS.',
            'color' => 'primary',
            'route' => 'mobile-app-development',
        ],

        [
            'icon' => 'fa-solid fa-pen-ruler',
            'title' => 'UI / UX Design',
            'description' => 'Modern, intuitive interfaces that deliver exceptional user experiences.',
            'color' => 'secondary',
            'route' => 'ui-ux-design',
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
        return view('components.home.services');
    }
}
