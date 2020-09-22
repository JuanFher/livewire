<?php

namespace App\Http\Livewire;

use App\Rate;
use App\Type;
use DB;
use Livewire\Component;
use Livewire\WithPagination;

class RatesController extends Component
{
    
    //properties
	public $type = 'Choose', $cost, $time = 'Chosse', $position, $description;
	public $selected_id, $search;
	public $action = 1;
	private $pagination = 5;
	public $types;

	public function mount()
	{
		$this->getPosition();
	}

	public function getPosition()
	{
		$rate = Rate::count();
		if ($rate > 0) {
			$rate = Rate::select('position')->orderBy('position', 'desc')->first();
			$this->position = $rate->position + 1;
		}else{
            $this->position = 0;
        }

	}
    public function render()
    {
        $this->types = Type::all();
        if (strlen($this->search) > 0) {
        	$info = Rate::leftjoin('types as t', 't.id', 'rates.type_id')
        			->where('rates.description', 'like', '%' . $this->search . '%')
        			->orWhere('rates.time', 'like', '%' . $this->search . '%')
        			->select('rates.*', 't.description as type')
        			->orderBy('rates.time', 'desc')
        			->orderBy('t.description')
        			->paginate($this->pagination);
        	return view('livewire.rates.component', [
        		'info' => $info
        	]);
        }else{
        	$info = Rate::leftjoin('types as t', 't.id', 'rates.type_id')
        			->select('rates.*', 't.description as type')
        			->orderBy('rates.time', 'desc')
        			->orderBy('t.description')
        			->paginate($this->pagination);
        	return view('livewire.rates.component', [
        		'info' => $info
        	]);
        }
    }

    public function updatingSearch(): void
    {
    	$this->gotoPage(1);
    }

    public function doAction($action)
    {
    	$this->resetInput();
    	$this->action = $action;
    }

    public function resetInput()
    {
    	$this->description = '';
    	$this->time = '';
    	$this->cost = '';
    	$this->type = 'Choose';
    	$this->selected_id = null;
    	$this->action = 1;
    	$this->search = '';
    }

    public function edit($id)
    {
    	$record = Rate::find($id);

    	$this->selected_id = $record->id;
    	$this->description = $record->description;
    	$this->cost = $record->cost;
    	$this->time = $record->time;
    	$this->type = $record->type->id;
    	$this->position = $record->position;
    	$this->action = 2;
    }

    public function storeOrUpdate()
    {
    	$this->validate([
    		'time' => 'required',
    		'cost' => 'required',
    		'type' => 'required',
    		'time' => 'not_in:Choose',
    		'type' => 'not_in:Choose'
    	]);

    	if ($this->selected_id > 0) {
    		$exist = Rate::where('time', $this->time)
    				->where('type_id', $this->type)
    				->where('id' <> $this->selected_id)
    				->select('time')
    				->count();
    	}else{
    		$exist = Rate::where('time', $this->time)
    				->where('type_id', $this->type)
    				->select('time')
    				->count();
    	}

    	if ($exist > 0) {
    		$this->emit('msg-error', 'La tarifa ya existe');
    		$this->resetInput();
    		return;
    	}

    	if ($this->selected_id <= 0) {
    		$rate = Rate::create([
    			'time' => $this->time,
    			'description' => $this->description,
    			'cost' => $this->cost,
    			'position' => $this->position,
    			'position' => $this->position,
    			'type_id' => $this->type,
    		]);
    	}else{
    		$record = Rate::find($this->selected_id);
    		$record->update([
    			'time' => $this->time,
    			'description' => $this->description,
    			'cost' => $this->cost,
    			'position' => $this->position,
    			'position' => $this->position,
    			'type_id' => $this->type,
    		]);
    	}

    	if ($this->position == 1) {
    		Rate::where('id', '<>', $rate->id)->update([
    			'position' => 0
    		]);
    	}

    	if ($this->selected_id) {
    		$this->emit('msgOK', 'Tarifa actualizada con éxito');
    	}else{
    		$this->emit('msgOK', 'Tarifa creada con éxito');
    	}

    	$this->resetInput();
    	$this->position();
    }

    protected $listeners = [
    	'deleteRow' => 'destroy',
    	'createFromModal' => 'createFromModal'
    ];

    public function createFromModal($info)
    {
    	$data= json_decode($info);
    	$this->selected_id = $data->id;
    	$this->time = $data->time;
    	$this->type = $data->type;
    	$this->cost = $data->cost;
    	$this->description = $data->description;
    	$this->position = $data->position;
        console.log('estabien');
    	$this->storeOrUpdate();
    }

    public function destroy($id)
    {
    	if ($id) {
    		$record = Rate::find($id);
    		$record->delete();
    		$this->resetInput();
    	}
    }
}
