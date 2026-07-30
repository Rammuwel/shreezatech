<?php

use App\Data\Projects;
use Livewire\Component;

new class extends Component
{
    public array $projects = [];
    public array $allprojects = [];
    public array $filterProjects = [];
    public $activeCategory = "all";
    public int $len = 0;
    public int $offset = 8;



    public function mount(): void
    {
        $this->allprojects = Projects::all();
        $this->len = count($this->allprojects);
        $this->projects = array_slice($this->allprojects, 0, $this->offset);
        $this->filterProjects = $this->allprojects;
    }

    public function explore(int $offset)
    {
        $this->offset = $offset;

        if ($this->len > $offset) {
            $this->projects = array_slice($this->filterProjects, 0, $this->offset);
        } else {
            $this->projects = $this->filterProjects;
        }
    }


    public function filter(string $slug)
    {
        $this->activeCategory = $slug;


        if ($slug == 'all' || $slug == 'ui-ux' || $slug == 'branding') {
            $this->filterProjects = $this->allprojects;
            $this->len = count($this->allprojects);
        } else {
            $this->filterProjects =  array_filter($this->allprojects, function ($item) use ($slug) {
                return $item['category'] == $slug;
            });
            $this->len = count($this->filterProjects);
        }



        $this->offset = 8;
        $this->projects = array_slice($this->filterProjects, 0, $this->offset);
    }
};
?>
<div>
    <x-seo.meta title="ShreezaTech | Portfolio" description="Explore our portfolio of successful projects across various industries including fintech, healthcare, e-commerce, and more." />
    <x-portfolio.hero />
    <x-portfolio.portfolio
        :projects="$projects"
        :offset="$offset"
        :len="$len"
        :activeCategory="$activeCategory" />
    <x-portfolio.termonology />
    <x-home.banner />
</div>