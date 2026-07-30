<?php

use App\Data\Solutions;
use Livewire\Component;

new class extends Component
{
    public array $solutions = [];
    public array $allsolutions = [];
    public int $len = 0;
    public int $offset = 8;


    public function mount(): void
    {
        $this->allsolutions = Solutions::all();
        $this->len = count($this->allsolutions);
        $this->solutions = array_slice($this->allsolutions, 0, $this->offset);
    }

    public function explore(int $offset)
    {
        $this->offset = $offset;

        if ($this->len > $offset) {
            $this->solutions = array_slice($this->allsolutions, 0, $this->offset);
        } else {
            $this->solutions = $this->allsolutions;
        }
    }
};
?>

<div>
    <x-seo.meta title="Shreeza | Solutions" description="Industry-specific software solutions for healthcare, finance, education, retail, manufacturing, and more." />
    <x-solutions.hero />
    <x-solutions.solutions
        :solutions="$solutions"
        :offset="$offset"
        :len="$len" />
    <x-home.banner />
</div>