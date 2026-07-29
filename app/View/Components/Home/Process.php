<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Process extends Component
{
    /**
     * Create a new component instance.
     */

    public array $process = [

        [
            'step' => '01',
            'title' => 'Strategy',
            'description' => 'We understand your business goals.',
            'icon' => 'fa-solid fa-lightbulb',
            'color' => 'primary'
        ],

        [
            'step' => '02',
            'title' => 'Planning',
            'description' => 'Create roadmap and architecture.',
            'icon' => 'fa-solid fa-sitemap',
            'color' => 'purple'
        ],

        [
            'step' => '03',
            'title' => 'Development',
            'description' => 'Build scalable applications.',
            'icon' => 'fa-solid fa-code',
            'color' => 'green'
        ],

        [
            'step' => '04',
            'title' => 'Testing',
            'description' => 'Quality assurance and security.',
            'icon' => 'fa-solid fa-shield-check',
            'color' => 'yellow'
        ],

        [
            'step' => '05',
            'title' => 'Deployment',
            'description' => 'Launch on cloud infrastructure.',
            'icon' => 'fa-solid fa-rocket',
            'color' => 'orange'
        ],

        [
            'step' => '06',
            'title' => 'Growth',
            'description' => 'Continuous support & scaling.',
            'icon' => 'fa-solid fa-chart-line',
            'color' => 'pink'
        ],

    ];

    public array $features = [

        'Agile Development',

        'Transparent Communication',

        'Scalable Architecture',

        'Cloud Native Solutions',

        'AI Powered Innovation',

        '24×7 Technical Support'

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
        return view('components.home.process');
    }
}
