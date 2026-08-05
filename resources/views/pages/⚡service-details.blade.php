<?php

use App\Data\Services;
use Livewire\Component;

new class extends Component
{
    public array $service = [];

    public function mount(string $slug)
    {
        $service = Services::find($slug);

        abort_unless($service, 404);

        $this->service = $service;
    }
};
?>

<div>
    <x-seo.meta :title="'Shreeza Tech | '.($service['name'] ?? 'Service Details')" description="Learn about our {{ $service['name'] ?? 'service' }} - {{ $service['short_description'] ?? 'Professional software development services' }}" :breadcrumbs="[['name' => 'Home', 'url' => url('/')], ['name' => 'Services', 'url' => url('/services')], ['name' => $service['name'] ?? 'Service Details', 'url' => url()->current()]]" />
    <x-service-details.hero :service="$service" />
    <x-service-details.overview :service="$service" />
    <x-service-details.features :service="$service" />
    <x-service-details.technology :service="$service" />
    <x-service-details.process :service="$service" />
    <x-service-details.why-choose :service="$service" />
    <x-service-details.faq :service="$service" />
    <x-home.banner  />
</div>