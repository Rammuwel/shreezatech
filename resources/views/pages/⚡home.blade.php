<?php

use Livewire\Component;

new class extends Component
{
   public $title = "Shreeza Tech | Software Development Company";
   public $metaDescription = "Shreeza Tech (ShreezaTech, Shreeja Tech) - Software Development Company. We build enterprise software, AI-powered platforms, cloud infrastructure, and digital products.";
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />
    <x-home.hero />
    
    <x-home.services />
    <x-home.industries/>
    <x-home.process />
    <x-home.portfolio />
    <x-home.review/>
    <x-home.banner/>
</div>
