<?php

namespace App\Http\Livewire;

use App\Models\Machine;
use App\Models\MaintenanceItem;
use Livewire\Component;

class ShowMaintenance extends Component
{
    public $maintenanceItem;
    public $name;
    public $description;
    public $selected_machine;
    public $machines;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'selected_machine' => 'numeric|gt:0'
    ];

    public function mount(MaintenanceItem $maintenanceItem)
    {
        $this->maintenanceItem = $maintenanceItem;
        $this->name = $maintenanceItem->name;
        $this->description = $maintenanceItem->description;
        $this->machines = Machine::all();
        $this->selected_machine = $this->machines->find($maintenanceItem->machine)->id;
    }

    public function render()
    {
        return view('livewire.show-maintenance');
    }

    public function submit()
    {
        $this->validate();
        $maintenanceItem = MaintenanceItem::find($this->maintenanceItem->id);
        $maintenanceItem->name = $this->name;
        $maintenanceItem->name = $this->name;
        $maintenanceItem->description = $this->description;
        $maintenanceItem->save();
    }

    public function delete()
    {
        $this->maintenanceItem->delete();
        return redirect(route('show-maintenances'));
    }
}
