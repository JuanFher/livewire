<?php

namespace App\Http\Livewire;

use App\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypesController extends Component
{
	use WithPagination;
	// public properties
	public $description; //campos de la tabla tipos
	public $selected_id, $search; //campos seleccionados para la busqueda
	public $action = 1; //permite movernos entre los formularios
	private $pagination = 4;

	// este es la primera funcion que se ejecuta cuando inicia un componente en livewire
	public function mount()
	{
		
	}

	// Se ejecuta despues del mount
    public function render()
    {	
    	
		if (strlen($this->search) > 0) {
    		// $info = Type::where('description', 'like' ,'%'.$this->search.'%')->paginate($this->pagination);
            $info = Type::where('description', 'like' , '%'.$this->search.'%')->paginate($this->pagination);
			return view('livewire.types.component', [
				'info' => $info,
			]);		    		
		}else{
			$info = Type::paginate($this->pagination);
			return view('livewire.types.component', [
				'info' => $info,
			]);		    		
		}    	
		
    }

    // Para busquedas con paginacion
    public function updatingSearch(): void		
    {
    	$this->gotoPage(1);
    }

    // Movernos entre ventanas
    public function doAction($action)
    {
    	$this->action = $action;
    }

    public function resetInput()
    {
    	$this->description = '';
    	$this->selected_id = null;
    	$this->action = 1;
    	$this->search = '';
    }

    // mostrar la info en registro editar
    public function edit($id)
    {
    	$record = Type::findOrFail($id);
	    $this->selected_id = $id;
	    $this->description = $record->description;
	    $this->action = 2;
    }

    //Crear y/o actualizar elementos de la tabla

    public function StoreUpdate()
    {
    	//validar descripcion
    	$this->validate([
    		'description' => 'required|min:4'
    	]);

    	if ($this->selected_id > 0) {
    		$exist = Type::where('description', $this->description)
                ->where('id', '<>', $this->selected_id)
                ->select('description')
                ->get();
    		if ($exist->count() > 0 ) {
    			session()->flash('msg-error', 'Ya existe otro registro con la misma descripción');
    			$this->resetInput();
    			return;
    		}
    	}
        else
        {
                $exist = Type::where('description', $this->description)
                        ->select('description')
                        ->get();
            if ($exist->count() > 0 ) {
                session()->flash('msg-error', 'Ya existe otro registro con la misma descripcion');
                $this->resetInput();
                return;
            }
        }

    	if ($this->selected_id <= 0) {
    		//Creamos el registro
    		// dd($description);
    		$record = Type::create([
    			'description' => $this->description
    		]);
    	}else{
    		//buscamos el registro
    		$record = Type::find($this->selected_id);
    		$record->update([
    			'description' => $this->description
    		]);
    	}

    	if ($this->selected_id) {
    		session()->flash('message', 'Tipo Actualizado');
    	}
    	else {
    		session()->flash('message', 'Tipo Creado');
    	}
    	
    	$this->resetInput();
	}

	public function destroy($id)
    {
    	if ($id) {
    		$record = Type::find($id);
    		$record->delete();
    		$this->resetInput();
    	}
    }

    //Listener / Escuchar eventos y ejecutar acciones
    protected $listeners = [
    	'deleteRow' => 'destroy'
    ];

}