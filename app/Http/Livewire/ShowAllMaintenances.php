<?php

namespace App\Http\Livewire;

use App\Models\MaintenanceItem;
use Livewire\Component;

class ShowAllMaintenances extends Component
{

    public $maintenances;


    public function mount()
    {
        $this->maintenances = MaintenanceItem::all();
    }

    public function render()
    {
        return view('livewire.show-all-maintenances');
    }
}
