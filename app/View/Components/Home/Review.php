<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Review extends Component
{
    /**
     * Create a new component instance.
     */


    public array $testimonials = [

        [
            "name" => "Ralph Edwards",
            "designation" => "CEO, Finzo Technologies",
            "review" => "Shreeza transformed our vision into a powerful web platform. Their expertise, communication, and commitment to quality made the entire development process smooth and successful.",
            "image" => "images/testimonials/shreeza-tech-testimonial-client-3.webp",
        ],

        [
            "name" => "Cody Fisher",
            "designation" => "CTO, MediX Healthcare",
            "review" => "From planning to deployment, the team delivered a secure and scalable healthcare solution on time. Their technical knowledge and attention to detail were outstanding.",
            "image" => "images/testimonials/shreeza-tech-testimonial-client-4.webp",
        ],

        [
            "name" => "Savannah Nguyen",
            "designation" => "Founder, ShopHub",
            "review" => "Our e-commerce platform exceeded expectations. The UI is beautiful, the performance is excellent, and the customer support has been exceptional throughout the project.",
            "image" => "images/testimonials/shreeza-tech-testimonial-savannah-nguyen.webp",
        ],

        [
            "name" => "Jacob Jones",
            "designation" => "Operations Manager, BuildPro",
            "review" => "Shreeza automated several of our internal workflows, saving us countless hours every week. Their team truly understands business requirements before writing a single line of code.",
            "image" => "images/testimonials/shreeza-tech-testimonial-jacob-jones.webp",
        ],

        [
            "name" => "Kristin Watson",
            "designation" => "Director, EduSmart Academy",
            "review" => "They built a modern Learning Management System that is fast, intuitive, and easy to manage. Our students and instructors love the new platform.",
            "image" => "images/testimonials/shreeza-tech-testimonial-kristin-watson.webp",
        ],

        [
            "name" => "Esther Howard",
            "designation" => "Founder, TravelEase",
            "review" => "Working with Shreeza was a fantastic experience. They delivered a feature-rich travel booking platform that significantly improved our customer experience.",
            "image" => "images/testimonials/shreeza-tech-testimonial-esther-howard.webp",
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
        return view('components.home.review');
    }
}
