<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class portfolio extends Component
{
    /**
     * Create a new component instance.
     */

    public array $projects;

    public function __construct()
    {
        $this->projects = [

            [
                'title'       => 'Investo',
                'category'    => 'FinTech',
                'type'        => 'Web Application',
                'description' => 'Modern trading platform with analytics dashboard.',
                'image'       => 'images/projects/project3.jpg',
                'route'       => 'investo',
                'color'       => 'primary',
            ],

            [
                'title'       => 'MediCare',
                'category'    => 'Healthcare',
                'type'        => 'Patient Management',
                'description' => 'Hospital and patient management solution.',
                'image'       => 'images/projects/project7.jpg',
                'route'       => 'medicare',
                'color'       => 'secondary',
            ],

            [
                'title'       => 'ShopHub',
                'category'    => 'E-Commerce',
                'type'        => 'Online Store',
                'description' => 'Complete ecommerce platform with payment gateway.',
                'image'       => 'images/projects/project8.jpg',
                'route'       => 'shophub',
                'color'       => 'primary',
            ],

            [
                'title'       => 'QuickPay',
                'category'    => 'Finance',
                'type'        => 'Mobile Application',
                'description' => 'Digital wallet and online payment system.',
                'image'       => 'images/projects/project5.jpg',
                'route'       => 'quickpay',
                'color'       => 'secondary',
            ],

            [
                'title'       => 'Taskly',
                'category'    => 'SaaS',
                'type'        => 'Project Management',
                'description' => 'Team collaboration and project management software.',
                'image'       => 'images/projects/project6.jpg',
                'route'       => 'taskly',
                'color'       => 'primary',
            ],

            [
                'title'       => 'EduNova',
                'category'    => 'Education',
                'type'        => 'Learning Platform',
                'description' => 'Online LMS with AI-powered learning experience.',
                'image'       => 'images/projects/project9.png',
                'route'       => 'edunova',
                'color'       => 'secondary',
            ],
            [
                'title'       => 'Tosty',
                'category'    => 'Education',
                'type'        => 'Learning Platform',
                'description' => 'Online LMS with AI-powered learning experience.',
                'image'       => 'images/projects/project10.png',
                'route'       => 'edunova',
                'color'       => 'secondary',
            ],

        ];
    
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
