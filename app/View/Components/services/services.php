<?php

namespace App\View\Components\services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class services extends Component
{
    /**
     * Create a new component instance.
     */

    // public array $services = [

    //     [
    //         'icon' => 'fa-desktop',
    //         'title' => 'Web Development',
    //         'description' => 'Modern, responsive and high-performance business websites.'
    //     ],

    //     [
    //         'icon' => 'fa-mobile-screen-button',
    //         'title' => 'Mobile App Development',
    //         'description' => 'Android & iOS applications built with modern technologies.'
    //     ],

    //     [
    //         'icon' => 'fa-object-group',
    //         'title' => 'UI/UX Design',
    //         'description' => 'Beautiful interfaces focused on user experience.'
    //     ],

    //     [
    //         'icon' => 'fa-robot',
    //         'title' => 'AI Development',
    //         'description' => 'AI-powered software and intelligent automation solutions.'
    //     ],

    //     [
    //         'icon' => 'fa-cloud',
    //         'title' => 'Cloud Solutions',
    //         'description' => 'Scalable cloud infrastructure and deployment services.'
    //     ],

    //     [
    //         'icon' => 'fa-laptop-code',
    //         'title' => 'ERP Solutions',
    //         'description' => 'Custom ERP systems for business management.'
    //     ],

    //     [
    //         'icon' => 'fa-users',
    //         'title' => 'CRM Solutions',
    //         'description' => 'Customer relationship management software.'
    //     ],

    //     [
    //         'icon' => 'fa-shield-halved',
    //         'title' => 'IT Consultancy',
    //         'description' => 'Expert guidance for digital transformation.'
    //     ],

    //     [
    //         'icon' => 'fa-bullhorn',
    //         'title' => 'Digital Marketing',
    //         'description' => 'SEO, social media and online marketing strategies.'
    //     ],

    // ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.services');
    }
}
