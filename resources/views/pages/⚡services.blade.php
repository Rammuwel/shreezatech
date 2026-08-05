<?php

use App\Data\Services;
use Livewire\Component;

new class extends Component
{
    public $title = "Shreeza Tech | Services";
    public $metaDescription = "Explore Shreeza Tech's comprehensive software development services including web, mobile, AI, cloud, and UI/UX design solutions.";

    public array $services = [];
    public array $allservices = [];
    public int $len = 0;
    public int $offset = 8;


    public function mount(): void
    {
        $this->allservices = Services::all();
        $this->len = count($this->allservices);
        $this->services = array_slice($this->allservices, 0, $this->offset);
    }

    public function explore(int $offset)
    {
        $this->offset = $offset;

        if ($this->len > $offset) {
            $this->services = array_slice($this->allservices, 0, $this->offset);
        } else {
            $this->services = $this->allservices;
        }
    }
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />
    <x-services.hero />
    <x-services.services
        :services="$services"
        :offset="$offset"
        :len="$len" />
    <x-services.features />
    
    <x-home.banner/>
</div>