<?php

use Livewire\Component;

new class extends Component
{
   public $title = "Shreeza|Home";
};
?>

<div>
    <x-navbar />
    <x-home.hero />
    <x-home.services />
    <x-home.process />
    <x-home.portfolio />
    <x-home.review/>
    <x-home.banner/>
    <x-footer />
</div>