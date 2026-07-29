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
    
    <x-navbar />
    <x-service-details.hero :service="$service" />

    <x-service-details.overview :service="$service" />

    <x-service-details.features :service="$service" />

    <x-service-details.technology :service="$service" />

    <x-service-details.process :service="$service" />

    <x-service-details.why-choose :service="$service" />

    <x-service-details.faq :service="$service" />

    <x-home.banner  />
    <x-footer />

</div>