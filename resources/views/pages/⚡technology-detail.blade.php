<?php

use App\Data\TechnologyCategories;
use Livewire\Component;

new class extends Component
{
    public array $category = [];

    public function mount(string $slug)
    {
        $category = TechnologyCategories::find($slug);

        abort_unless($category, 404);

        $this->category = $category;
    }
};
?>

<div>
    <x-seo.meta :title="'Shreeza Tech | '.($category['name'] ?? 'Technology')" :description="'Explore our '.($category['name'] ?? 'technology').' expertise - '.($category['short_description'] ?? 'Professional technology solutions.')" :breadcrumbs="[['name' => 'Home', 'url' => url('/')], ['name' => 'Technologies', 'url' => url('/technologies')], ['name' => $category['name'] ?? 'Technology', 'url' => url()->current()]]" />
    <x-technology-details.hero :category="$category" />
    <x-technology-details.overview :category="$category" />
    <x-technology-details.features :category="$category" />
    <x-technology-details.stack :category="$category" />
    <x-technology-details.process :category="$category" />
    <x-technology-details.faq :category="$category" />
    <x-home.banner />
</div>
