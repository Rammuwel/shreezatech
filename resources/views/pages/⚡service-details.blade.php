<?php

use App\Data\Services;
use Livewire\Component;

new class extends Component
{
    public array $service = [];

    public function mount(string $slug)
    {
        $this->service = Services::find($slug);
    }
};
?>

<div>
    <x-seo.meta :title="'Shreeza | '.($service['title'] ?? 'Service Details')" description="Learn about our {{ $service['title'] ?? 'service' }} - {{ $service['short'] ?? 'Professional software development services' }}" />
    <x-service-details.hero :service="$service" />
    <x-service-details.overview :service="$service" />
    <x-service-details.features :service="$service" />
    <x-service-details.technology :service="$service" />
    <x-service-details.process :service="$service" />
    <x-service-details.why-choose :service="$service" />
    <x-service-details.faq :service="$service" />
    <x-home.banner  />
</div>