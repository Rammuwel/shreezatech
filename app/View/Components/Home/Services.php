<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Services extends Component
{
    public array $services = [
        ['icon' => 'code', 'title' => 'Web Development', 'description' => 'Building Fast, Reactive, Secure & Scalable Web Applications', 'color' => 'primary', 'route' => 'web-development'],
        ['icon' => 'cubes', 'title' => 'Enterprise Applications', 'description' => 'Scalable enterprise solutions to streamline your operations.', 'color' => 'secondary', 'route' => 'enterprise-application-development'],
        ['icon' => 'brain', 'title' => 'AI & Automation', 'description' => 'Intelligent AI solutions to automate business processes.', 'color' => 'primary', 'route' => 'ai-automation'],
        ['icon' => 'cloud', 'title' => 'Cloud Engineering', 'description' => 'Cloud-native solutions with AWS, Azure and DevOps.', 'color' => 'secondary', 'route' => 'cloud-solutions'],
        ['icon' => 'mobile', 'title' => 'Mobile Applications', 'description' => 'Native and cross-platform mobile apps for Android & iOS.', 'color' => 'primary', 'route' => 'mobile-app-development'],
        ['icon' => 'palette', 'title' => 'UI / UX Design', 'description' => 'Modern, intuitive interfaces that deliver exceptional user experiences.', 'color' => 'secondary', 'route' => 'ui-ux-design'],
    ];

    public function render(): View|Closure|string
    {
        return view('components.home.services');
    }
}
