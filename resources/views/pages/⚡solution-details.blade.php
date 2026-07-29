<?php

use App\Data\Solutions;
use Livewire\Component;

new class extends Component
{
    public array $solution = [];

    public function mount(string $slug)
    {
        $this->solution = Solutions::find($slug);
    }
};
?>

<div>
    <x-navbar />
    <x-solution-details.hero :solution="$solution" />
    <x-solution-details.overview :overview="$solution['overview']" />
    <x-solution-details.challenges :challenges="$solution['challenges']" />
    <x-solution-details.solutions :solutions="$solution['solutions']" />
    <x-solution-details.features :features="$solution['features']" />
    <x-solution-details.process :process="$solution['process']" />
    <x-solution-details.faq  :faqs="$solution['faqs']" />
    <x-home.banner />
    <x-footer />
</div>