<?php

namespace App\Http\Livewire;

use App\Models\Machine;
use Livewire\Component;

class CreateMachine extends Component
{

    public $name;
    public $position;

    protected $rules = [
        'name' => 'required',
        'position' => 'required'
    ];

    public function render()
    {
        return view('livewire.create-machine');
    }

    public function submit()
    {
        $this->validate();
        Machine::create([
            'name' => $this->name,
            'position' => $this->position
        ]);
        $this->name = '';
        $this->position = '';
    }
}
