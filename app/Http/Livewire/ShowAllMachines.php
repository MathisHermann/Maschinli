<?php

namespace App\Http\Livewire;

use App\Models\Machine;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllMachines extends Component
{
    public $machines;

    public function mount()
    {
        $this->machines = Machine::all();
    }

    public function render()
    {
        return view('livewire.show-all-machines');
    }
}
