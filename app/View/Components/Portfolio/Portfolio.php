<?php

namespace App\View\Components\Portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    

    public  $filteredProjects = [];
    public $categories = [

    [
        'slug' => 'all',
        'name' => 'All',
    ],

    [
        'slug' => 'web',
        'name' => 'Web',
    ],

    [
        'slug' => 'mobile',
        'name' => 'Mobile',
    ],

    [
        'slug' => 'ui-ux',
        'name' => 'UI/UX',
    ],

    [
        'slug' => 'branding',
        'name' => 'Branding',
    ],

];

    // public $projects = [

    //     [
    //         "title" => "Fintech Dashboard",
    //         "category" => "Web",
    //         "type" => "Web Application",
    //         "image" => "images/projects/admin-dash-theme.png",
    //         "route" => "fintech-dashboard",
    //     ],

    //     [
    //         "title" => "E-commerce Platform",
    //         "category" => "Web",
    //         "type" => "Web Application",
    //         "image" => "images/projects/project2.jpg",
    //         "route" => "ecommerce-platform",
    //     ],

    //     [
    //         "title" => "Fitness Tracking App",
    //         "category" => "Mobile",
    //         "type" => "Mobile Application",
    //         "image" => "images/projects/shreeza-tech-investo-fintech-project.webp",
    //         "route" => "fitness-app",
    //     ],

    //     [
    //         "title" => "Business Website",
    //         "category" => "Web",
    //         "type" => "Website",
    //         "image" => "images/projects/project4.jpg",
    //         "route" => "business-website",
    //     ],

    //     [
    //         "title" => "AI Chat Platform",
    //         "category" => "UI/UX",
    //         "type" => "Web Application",
    //         "image" => "images/projects/shreeza-tech-quickpay-payments-project.webp",
    //         "route" => "ai-chat",
    //     ],
    //     [
    //         "title" => "Business Website",
    //         "category" => "Web",
    //         "type" => "Website",
    //         "image" => "images/projects/project4.jpg",
    //         "route" => "business-website",
    //     ],

    //     [
    //         "title" => "AI Chat Platform",
    //         "category" => "UI/UX",
    //         "type" => "Web Application",
    //         "image" => "images/projects/shreeza-tech-quickpay-payments-project.webp",
    //         "route" => "ai-chat",
    //     ],
    //     [
    //         "title" => "Business Website",
    //         "category" => "Web",
    //         "type" => "Website",
    //         "image" => "images/projects/project4.jpg",
    //         "route" => "business-website",
    //     ],

    //     [
    //         "title" => "AI Chat Platform",
    //         "category" => "UI/UX",
    //         "type" => "Web Application",
    //         "image" => "images/projects/shreeza-tech-quickpay-payments-project.webp",
    //         "route" => "ai-chat",
    //     ],

    //     [
    //         "title" => "Food Delivery App",
    //         "category" => "Mobile",
    //         "type" => "Mobile Application",
    //         "image" => "images/projects/shreeza-tech-taskly-productivity-project.webp",
    //         "route" => "food-delivery",
    //     ],

    // ];







    public function __construct()
    {
        
    }


    /**
     * 
     * 
     * Get the view / contents that represent the component.
     */


    public function render(): View|Closure|string
    {
        return view('components.portfolio.portfolio');
    }
}
