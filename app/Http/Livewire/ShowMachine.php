<?php

namespace App\Http\Livewire;

use App\Models\Machine;
use Livewire\Component;

class ShowMachine extends Component
{

    public $machine;
    public $name;
    public $position;

    protected $rules = [
      'name' => 'required',
      'position'  => 'required'
    ];

    public function mount(Machine $machine)
    {
        $this->machine = $machine;
        $this->name = $this->machine->name;
        $this->position = $this->machine->position;
    }

    public function render()
    {
        return view('livewire.show-machine');
    }

    public function submit()
    {
        $this->validate();
        $this->machine->name = $this->name;
        $this->machine->position = $this->position;
        $this->machine->save();
        session()->flash('success-edit');
    }

    public function delete()
    {
        $this->machine->delete();
        return redirect(route('show-machines'));
    }

}
