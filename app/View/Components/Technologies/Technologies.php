<?php

namespace App\View\Components\Technologies;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Technologies extends Component
{
    /**
     * Create a new component instance.
     */
    public array $technologyGroups = [

        [

            'title' => 'Frontend',

            'items' => [

                [
                    'name' => 'React',
                    'icon' => 'fab fa-react',
                    'color' => '#61DAFB'
                ],

                [
                    'name' => 'Next.js',
                    'icon' => 'fas fa-n',
                    'color' => 'var(--color-heading)'
                ],

                [
                    'name' => 'Vue.js',
                    'icon' => 'fab fa-vuejs',
                    'color' => '#42B883'
                ],

                [
                    'name' => 'Angular',
                    'icon' => 'fab fa-angular',
                    'color' => '#DD0031'
                ],

                [
                    'name' => 'TypeScript',
                    'icon' => 'fa-solid fa-code',
                    'color' => '#3178C6'
                ],

                [
                    'name' => 'Svelte',
                    'icon' => 'fa-solid fa-s',
                    'color' => '#FF3E00'
                ],

                [
                    'name' => 'Tailwind CSS',
                    'icon' => 'fas fa-wind',
                    'color' => '#38BDF8'
                ],

                [
                    'name' => 'HTML5',
                    'icon' => 'fab fa-html5',
                    'color' => '#E44D26'
                ],

                [
                    'name' => 'CSS3',
                    'icon' => 'fab fa-css3-alt',
                    'color' => '#1572B6'
                ],

                [
                    'name' => 'JavaScript',
                    'icon' => 'fab fa-js',
                    'color' => '#F7DF1E'
                ],

            ]

        ],

        [

            'title' => 'Backend',

            'items' => [

                [
                    'name' => 'Node.js',
                    'icon' => 'fab fa-node-js',
                    'color' => '#68A063'
                ],

                [
                    'name' => 'Laravel',
                    'icon' => 'fab fa-laravel',
                    'color' => '#FF2D20'
                ],

                [
                    'name' => 'Python',
                    'icon' => 'fab fa-python',
                    'color' => '#3776AB'
                ],

                [
                    'name' => 'Django',
                    'icon' => 'fas fa-leaf',
                    'color' => '#0C4B33'
                ],

                [
                    'name' => 'PHP',
                    'icon' => 'fab fa-php',
                    'color' => '#777BB4'
                ],

                [
                    'name' => 'Express.js',
                    'icon' => 'fas fa-server',
                    'color' => 'var(--color-heading)'
                ],

                [
                    'name' => 'Java',
                    'icon' => 'fa-brands fa-java',
                    'color' => '#F89820'
                ],

                [
                    'name' => '.NET',
                    'icon' => 'fa-brands fa-microsoft',
                    'color' => '#512BD4'
                ],

                [
                    'name' => 'Spring Boot',
                    'icon' => 'fa-solid fa-seedling',
                    'color' => '#6DB33F'
                ],

                [
                    'name' => 'Go',
                    'icon' => 'fa-brands fa-golang',
                    'color' => '#00ADD8'
                ],

                [
                    'name' => 'Ruby on Rails',
                    'icon' => 'fa-solid fa-gem',
                    'color' => '#CC0000'
                ],

                [
                    'name' => 'NestJS',
                    'icon' => 'fa-solid fa-paw',
                    'color' => '#E0234E'
                ],

                [
                    'name' => 'GraphQL',
                    'icon' => 'fa-solid fa-diagram-project',
                    'color' => '#E10098'
                ],

            ]

        ],
         [
            'title' => 'Mobile App Devlopment',

            'items' => [

                [
                    'name' => 'Flutter',
                    'icon' => 'fa-solid fa-mobile-screen',
                    'color' => '#02569B'
                ],

                [
                    'name' => 'React Native',
                    'icon' => 'fab fa-react',
                    'color' => '#61DAFB'
                ],

                [
                    'name' => 'Android',
                    'icon' => 'fab fa-android',
                    'color' => '#3DDC84'
                ],

                [
                    'name' => 'iOS',
                    'icon' => 'fab fa-apple',
                    'color' => 'var(--color-heading)'
                ],

                [
                    'name' => 'Swift',
                    'icon' => 'fa-solid fa-feather-pointed',
                    'color' => '#F05138'
                ],

                [
                    'name' => 'Kotlin',
                    'icon' => 'fa-solid fa-k',
                    'color' => '#7F52FF'
                ],

                [
                    'name' => 'Firebase',
                    'icon' => 'fa-solid fa-fire',
                    'color' => '#FFA611'
                ],

            ]

        ],

        [

            'title' => 'Database',

            'items' => [

                [
                    'name' => 'MySQL',
                    'icon' => 'fas fa-database',
                    'color' => '#00758F'
                ],

                [
                    'name' => 'PostgreSQL',
                    'icon' => 'fas fa-database',
                    'color' => '#336791'
                ],

                [
                    'name' => 'MongoDB',
                    'icon' => 'fas fa-leaf',
                    'color' => '#13AA52'
                ],

                [
                    'name' => 'Firebase',
                    'icon' => 'fas fa-fire',
                    'color' => '#FFA611'
                ],

                [
                    'name' => 'Redis',
                    'icon' => 'fa-solid fa-bolt',
                    'color' => '#DC382D'
                ],

                [
                    'name' => 'SQL Server',
                    'icon' => 'fa-solid fa-database',
                    'color' => '#CC2927'
                ],

                [
                    'name' => 'SQLite',
                    'icon' => 'fas fa-database',
                    'color' => '#0F80CC'
                ],

            ]

        ],
       

        [

            'title' => 'Cloud & DevOps',

            'items' => [

                [
                    'name' => 'AWS',
                    'icon' => 'fab fa-aws',
                    'color' => '#FF9900'
                ],

                [
                    'name' => 'Azure',
                    'icon' => 'fab fa-microsoft',
                    'color' => '#0089D6'
                ],

                [
                    'name' => 'Google Cloud',
                    'icon' => 'fab fa-google',
                    'color' => '#4285F4'
                ],

                [
                    'name' => 'Docker',
                    'icon' => 'fab fa-docker',
                    'color' => '#2496ED'
                ],

                [
                    'name' => 'Kubernetes',
                    'icon' => 'fa-solid fa-circle-nodes',
                    'color' => '#326CE5'
                ],

                [
                    'name' => 'GitLab',
                    'icon' => 'fa-brands fa-gitlab',
                    'color' => '#FC6D26'
                ],

                [
                    'name' => 'Jenkins',
                    'icon' => 'fa-solid fa-user-secret',
                    'color' => '#D24939'
                ],

                [
                    'name' => 'Terraform',
                    'icon' => 'fa-solid fa-t',
                    'color' => '#844FBA'
                ],

                [
                    'name' => 'GitHub',
                    'icon' => 'fab fa-github',
                    'color' => 'var(--color-heading)'
                ],

            ]

        ]

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
        return view('components.technologies.technologies');
    }
}
