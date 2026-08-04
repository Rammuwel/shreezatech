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
    <x-seo.meta :title="'Shreeza Tech | '.($solution['name'] ?? 'Solution Details')" :description="'Explore our '.($solution['name'] ?? 'solution').' - industry-specific digital solutions for your business.'" :breadcrumbs="[['name' => 'Home', 'url' => url('/')], ['name' => 'Solutions', 'url' => url('/solutions')], ['name' => $solution['name'] ?? 'Solution Details', 'url' => url()->current()]]" />
    <x-solution-details.hero :solution="$solution" />
    <x-solution-details.overview :overview="$solution['overview']" />
    <x-solution-details.challenges :challenges="$solution['challenges']" />
    <x-solution-details.solutions :solutions="$solution['solutions']" />
    <x-solution-details.features :features="$solution['features']" />
    <x-solution-details.process :process="$solution['process']" />
    <x-solution-details.faq  :faqs="$solution['faqs']" />
    <x-home.banner />
</div>