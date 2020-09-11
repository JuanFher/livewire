<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DrawerController extends Component
{
    public $name = '';
	public function mount()
	{
		$this->name = 'Melisa';
	}

    public function render()
    {
        return view('livewire.drawers');
    }


    
}
