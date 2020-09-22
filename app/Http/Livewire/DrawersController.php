<?php

namespace App\Http\Livewire;

use App\Type;
use App\Drawer;
use Livewire\Component;
use Livewire\WithPagination;


class DrawersController extends Component
{
    use WithPagination;

    public $type = 'Choose', $description, $status='AVAILABLE';
    public $selected_id, $search;
    public $action = 1;
    private $pagination = 5;
    public $types;

	public function mount()
	{

	}

    public function render()
    {
        $this->types = Type::all();
        
        if (strlen($this->search) > 0) {
        	$info = Drawer::leftjoin('types as t', 't.id', 'drawers.type_id')
        	        ->select('drawers.*', 't.description as type')
        	        ->where('drawers.description', 'like', '%' . $this->search . '%')
        	        ->orWhere('drawers.status', 'like', '%' . $this->search . '%')
        	        ->paginate($this->pagination);

        	        return view('livewire.drawers.component', [
        	        	'info' => $info
        	        ]);
        }
        else
        {
        	$info = Drawer::leftjoin('types as t', 't.id', 'drawers.type_id')
        	        ->select('drawers.*', 't.description as type')
        	        ->orderBy('drawers.id', 'desc')
        	        ->paginate($this->pagination);

        	        return view('livewire.drawers.component', [
        	        	'info' => $info
        	        ]);
        }
        
    }

    public function updatingSearch()
    {
    	$this->gotoPage(1);
    }

    public function doAction($action)
    {
    	$this->action = $action;
    }

    public function resetInput()
    {
    	$this->description = '';
    	$this->type = 'Choose';
    	$this->status = 'AVAILABLE';
    	$this->selected_id = null;
    	$this->action = 1;
    	$this->search = '';
    }


    public function edit($id)
    {
    	$record = Drawer::findOrFail($id);

    	$this->selected_id = $id;
    	$this->type = $record->type_id;
    	$this->description = $record->description;
    	$this->status = $record->status;
    	$this->action = 2;
    }

    public function StoreOrUpdate()
    {
    	$this->validate([
    		'type' => 'not_in:Choose'
    	]);

    	$this->validate([
    		'type' => 'required',
    		'description' => 'required',
    		'status' => 'required',
    	]);

        if ($this->selected_id > 0) {
            $exist = Drawer::where('description', $this->description)->where('id', '<>', $this->selected_id)->select('description')->get();
            if ($exist->count() > 0 ) {
                session()->flash('msg-error', 'Ya existe otro registro con la misma descripción');
                $this->resetInput();
                return;
            }
        }
        else
        {
                $exist = Drawer::where('description', $this->description)->select('description')->get();
            if ($exist->count() > 0 ) {
                session()->flash('msg-error', 'Ya existe otro registro con la misma descripcion');
                $this->resetInput();
                return;
            }
        } 

    	if ($this->selected_id <= 0 ) {
    		$drawer = Drawer::create([
	    		'description' => $this->description,
	    		'type_id' => $this->type,
	    		'status' => $this->status,
    		]);
    	}else{
    		$record = Drawer::find($this->selected_id);
    		$record->update([
    			'description' => $this->description,
	    		'type_id' => $this->type,
	    		'status' => $this->status,
    		]);
    	}

    	if ($this->selected_id) {
    		$this->emit('msgOK', 'Cajon actualizado con éxito');
    	}else{
    		$this->emit('msgOK', 'Cajon creado con éxito');
    	}

    	$this->resetInput();
    }

    public function destroy($id)
    {
    	if ($id) {
    		$record = Drawer::where('id', $id);
    		$record->delete();
    		$this->resetInput();
    		$this->emit('msgok', 'Cajon eliminado con éxito');
    	}
    }

     protected $listeners = [
    	'deleteRow' => 'destroy'
    ];
}
