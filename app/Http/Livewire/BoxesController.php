<?php

namespace App\Http\Livewire;

use App\Box;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BoxesController extends Component
{
	use WithPagination;
	
	//properties
	public $type = 'Choose', $amount, $concept, $receipt;
	public $selected_id, $search;
	public $action = 1;
	private $pagination = 5;

	public function mount()
	{
		
	}

    public function render()
    {
    	if (strlen($this->search) > 0 ) {
    		 //no llega a este control
    		$info =Box::where('type', 'like', '%' . $this->search . '%')
    					->orWhere('concept', 'like', '%' . $this->search . '%')
    					->paginate($this->pagination);
    		// dd($info);
    		return view('livewire.boxes.component', [
    			'info' => $info
    		]);
    	}else{
    		$boxes = Box::leftjoin('users as u', 'u.id', 'boxes.user_id')
    				->select('boxes.*', 'u.name')
    				->orderBy('id', 'desc')
    				->paginate($this->pagination);
    		return view('livewire.boxes.component', [
    			'info' => $boxes
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
    	$this->concept= '';
    	$this->type = 'Choose';
    	$this->amount = '';
    	$this->receipt = '';
    	$this->selected_id = null;
    	$this->action = 1;
    	$this->search = '';
    }

    public function edit($id)
    {
    	$record = Box::findOrFail($id);
    	$this->selected_id = $id;
    	$this->type = $record->type;
    	$this->concept = $record->concept;
    	$this->amount = $record->amount;
    	$this->receipt = $record->receipt;
    	$this->action = 3;
    }

    public function StoreOrUpdate()
    {
    	$this->validate([
    		'type' => 'not_in:Choose'
    	]);

		$this->validate([
    		'type' => 'required',
    		'amount' => 'required',
    		'concept' => 'required',
    	]);

		if ($this->selected_id <= 0) {
			$box = Box::create([
				'amount' => $this->amount,
				'type' => $this->type,
				'concept' => $this->concept,
				'user_id' => Auth::user()->id
			]);
			// dd($this->receipt);
			if ($this->receipt) {
				$image = $this->receipt;
				$fileName = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
           		$moved = \Image::make($image)->save('images/movs/'.$fileName);
           		
           		if ($moved) {
           			$box->receipt = $fileName;
           			$box->save();
           		}
			}
		} else {
			$record = Box::find($this->selected_id);
			$record->update([
				'amount' => $this->amount,
				'type' => $this->type,
				'concept' => $this->concept,
				'user_id' => Auth::user()->id
			]);
			// dd($this->receipt);
			if ($this->receipt) {
				$image = $this->receipt;
				$fileName = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
           		$moved = \Image::make($image)->save('images/movs/'.$fileName);

           		if ($moved) {
           			$record->receipt = $fileName;
           			$record->save();
           		}
			}
		}

		if ($this->selected_id) {
			$this->emit('msgOK', 'Movimiento de caja actualizado con éxito');
		}else{
			$this->emit('msgOK', 'Movimiento de caja creado con éxito');
		}

		$this->resetInput();
    }

    public function destroy($id)
    {
    	if ($id) {
    		$record = Box::find($id);
    		$record->delete();
    		$this->resetInput();
    	}
    }

    //Listener / Escuchar eventos y ejecutar acciones
    protected $listeners = [
    	'deleteRow' => 'destroy',
    	'fileUpload' => 'handleFileUpload'
    ];

    public function handleFileUpload($imageData)
    {
    	$this->receipt = $imageData;
    }

}
