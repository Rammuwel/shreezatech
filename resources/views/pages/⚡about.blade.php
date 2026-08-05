<?php

use Livewire\Component;

new class extends Component
{
    public $title = "Shreezatech | About Us";
    public $metaDescription = "Learn about Shreeza Tech's journey, our team, and our mission to deliver innovative software solutions.";
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />
    <x-about.hero/>
    <x-about.state/>
    <x-about.journy/>
    <x-about.team/>
    <x-home.banner/>
</div>