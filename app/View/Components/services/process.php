<?php

namespace App\View\Components\services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class process extends Component
{
    /**
     * Create a new component instance.
     */

    public array $processes = [

    [
        'step' => '01',
        'icon' => 'fa-magnifying-glass',
        'title' => 'Discovery',
        'description' => 'Understanding your business goals, target audience and project requirements.'
    ],

    [
        'step' => '02',
        'icon' => 'fa-lightbulb',
        'title' => 'Planning',
        'description' => 'Creating project roadmap, wireframes, architecture and development strategy.'
    ],

    [
        'step' => '03',
        'icon' => 'fa-pen-ruler',
        'title' => 'UI/UX Design',
        'description' => 'Designing modern, intuitive and engaging user experiences.'
    ],

    [
        'step' => '04',
        'icon' => 'fa-code',
        'title' => 'Development',
        'description' => 'Building secure, scalable and high-performance digital solutions.'
    ],

    [
        'step' => '05',
        'icon' => 'fa-vial-circle-check',
        'title' => 'Testing',
        'description' => 'Quality assurance, bug fixing and performance optimization.'
    ],

    [
        'step' => '06',
        'icon' => 'fa-rocket',
        'title' => 'Launch',
        'description' => 'Deployment, monitoring and continuous support after launch.'
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
        return view('components.services.process');
    }
}
