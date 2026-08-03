<?php

namespace App\Data;

class IndustriesData
{
    public static function all(): array
    {
        return [

            [
                'title' => 'Healthcare',
                'slug' => 'healthcare',
                'icon' => 'fa-solid fa-heart-pulse',
                'description' => 'HIPAA compliant healthcare websites, patient portals and hospital management solutions.',
                'color' => 'primary',
                'featured' => true,
            ],

            [
                'title' => 'Real Estate',
                'slug' => 'real-estate',
                'icon' => 'fa-solid fa-house',
                'description' => 'Property listing platforms with advanced search and lead generation.',
                'color' => 'secondary',
                'featured' => false,
            ],

            [
                'title' => 'Education',
                'slug' => 'education',
                'icon' => 'fa-solid fa-graduation-cap',
                'description' => 'Modern LMS platforms, online learning portals and education websites.',
                'color' => 'primary',
                'featured' => false,
            ],

            [
                'title' => 'Legal',
                'slug' => 'legal',
                'icon' => 'fa-solid fa-gavel',
                'description' => 'Professional websites for advocates, law firms and legal consultants.',
                'color' => 'secondary',
                'featured' => false,
            ],

            [
                'title' => 'Restaurant',
                'slug' => 'restaurant',
                'icon' => 'fa-solid fa-utensils',
                'description' => 'Restaurant websites with online ordering and reservation systems.',
                'color' => 'primary',
                'featured' => false,
            ],

            [
                'title' => 'Travel',
                'slug' => 'travel',
                'icon' => 'fa-solid fa-plane',
                'description' => 'Travel booking, tour packages and destination management websites.',
                'color' => 'secondary',
                'featured' => false,
            ],

        ];
    }
}