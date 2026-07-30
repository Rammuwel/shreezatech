<?php

use Livewire\Component;

new class extends Component
{
   public $title = "ShreezaTech | Home";
   public $metaDescription = "ShreezaTech - Consulting & Software Solutions. We build enterprise software, AI-powered platforms, cloud infrastructure, and digital products.";
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />
    <x-home.hero />
    <x-home.services />
    <x-home.process />
    <x-home.portfolio />
    <x-home.review/>
    <x-home.banner/>
</div>
