<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Portfolio extends Component
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
                'image'       => 'images/projects/shreeza-tech-investo-fintech-project.webp',
                'route'       => 'investo',
                'color'       => 'primary',
            ],

            [
                'title'       => 'MediCare',
                'category'    => 'Healthcare',
                'type'        => 'Patient Management',
                'description' => 'Hospital and patient management solution.',
                'image'       => 'images/projects/shreeza-tech-medicare-healthcare-project.webp',
                'route'       => 'medicare',
                'color'       => 'secondary',
            ],

            [
                'title'       => 'ShopHub',
                'category'    => 'E-Commerce',
                'type'        => 'Online Store',
                'description' => 'Complete ecommerce platform with payment gateway.',
                'image'       => 'images/projects/shreeza-tech-shophub-ecommerce-project.webp',
                'route'       => 'shophub',
                'color'       => 'primary',
            ],

            [
                'title'       => 'QuickPay',
                'category'    => 'Finance',
                'type'        => 'Mobile Application',
                'description' => 'Digital wallet and online payment system.',
                'image'       => 'images/projects/shreeza-tech-quickpay-payments-project.webp',
                'route'       => 'quickpay',
                'color'       => 'secondary',
            ],

            [
                'title'       => 'Taskly',
                'category'    => 'SaaS',
                'type'        => 'Project Management',
                'description' => 'Team collaboration and project management software.',
                'image'       => 'images/projects/shreeza-tech-taskly-productivity-project.webp',
                'route'       => 'taskly',
                'color'       => 'primary',
            ],

            [
                'title'       => 'EduNova',
                'category'    => 'Education',
                'type'        => 'Learning Platform',
                'description' => 'Online LMS with AI-powered learning experience.',
                'image'       => 'images/projects/shreeza-tech-edunova-edtech-project.webp',
                'route'       => 'edunova',
                'color'       => 'secondary',
            ],
            [
                'title'       => 'Tosty',
                'category'    => 'Education',
                'type'        => 'Learning Platform',
                'description' => 'Online LMS with AI-powered learning experience.',
                'image'       => 'images/projects/shreeza-tech-tosty-learning-platform-project.webp',
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
