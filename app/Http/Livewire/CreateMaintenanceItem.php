<?php

namespace App\Http\Livewire;

use App\Models\Machine;
use App\Models\MaintenanceItem;
use Livewire\Component;

class CreateMaintenanceItem extends Component
{

    public $name;
    public $description;
    public $machines;
    public $selected_machine;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'selected_machine' => 'numeric|gt:0'
    ];

    public function mount()
    {
        $this->selected_machine = -1;
        $this->machines = Machine::all();
    }


    public function render()
    {
        return view('livewire.create-maintenance-item');
    }

    public function submit()
    {
        $this->validate();
        $machine = Machine::find($this->selected_machine);
        MaintenanceItem::create([
            'name' => $this->name,
            'description' => $this->description,
            'machine_id' => $machine->id
        ]);
        $this->name = '';
        $this->description = '';
    }
}
