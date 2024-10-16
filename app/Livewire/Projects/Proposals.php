<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;

    public int $qtd = 5;

    #[Computed()]
    public function proposals()
    {
        return $this
            ->project
            ->proposals()
            ->orderBy('hours', 'desc')
            ->paginate($this->qtd);
    }

    public function loadMore()
    {
        $this->qtd += 10;
    }

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
