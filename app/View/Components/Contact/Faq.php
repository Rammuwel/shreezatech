<?php

namespace App\View\Components\Contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Faq extends Component
{
    
    /**
     * Create a new component instance.
     */


    public int $active = 0;

    public $faqs = [

        [
            'question' => 'How long does a project usually take?',
            'answer' => 'The timeline depends on the complexity of the project. Most business websites take 2–4 weeks, while custom web applications typically take 6–12 weeks.'
        ],

        [
            'question' => 'What technologies do you use?',
            'answer' => 'We specialize in Laravel, Livewire, PHP, React, Node.js, Tailwind CSS, Three.js, GSAP, MySQL, and modern cloud technologies.'
        ],

        [
            'question' => 'Do you provide website maintenance?',
            'answer' => 'Yes. We offer long-term maintenance, security updates, performance optimization, backups, and feature enhancements.'
        ],

        [
            'question' => 'Can you redesign my existing website?',
            'answer' => 'Absolutely. We can modernize your existing website while preserving your content and improving user experience.'
        ],

        [
            'question' => 'How much does a project cost?',
            'answer' => 'Pricing depends on your requirements. Contact us for a free consultation and personalized quotation.'
        ],

        [
            'question' => 'How do we start working together?',
            'answer' => 'Simply submit the contact form. We will schedule a discovery call, understand your requirements, and prepare a proposal.'
        ],

    ];
    public function toggle($index)
    {
        $this->active = $this->active === $index ? -1 : $index;
    }
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact.faq');
    }
}
