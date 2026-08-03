<?php

namespace App\View\Components\home;

use App\Data\IndustriesData;
use App\Data\Solutions;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Industries extends Component
{
    public $industries = [];

    public function __construct()
    {
        $this->industries = array_map(function ($industry) {
            $solution = Solutions::find($industry['slug']);
            $industry['route'] = $solution ? route('solution', $solution['slug']) : route('solutions');
            return $industry;
        }, array_slice(IndustriesData::all(), 0, 6));
    }

    public function render(): View|Closure|string
    {
        return view('components.home.industries');
    }
}
