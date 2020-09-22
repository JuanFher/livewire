<div class="main-content">
    @if ($action == 1)
    	<div class="layout-pc-spacing">
    		<div class="row layout-top-spacing">
    			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
    				<div class="widget-content-area br-4">
    					<div class="widget-one">
    						<h3>Movimientos de Caja</h3>
    						@include('common.search')
    						@include('common.alerts')
    						<div class="table-responsive">
    							<table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
				                    <thead>
										<tr>
											<th class="text-center">ID</th>
				                            <th class="text-center">TIPO</th>
				                            <th class="text-center">MONTO</th>
				                            <th class="text-center">COMPROBANTE</th>
				                            <th class="text-center">FECHA</th>
				                            <th class="text-center">ACCIONES</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($info as $r)
											<tr>
												<td class="text-center">{{ $r->id }}</td>
												@if ($r->type == 'Income')
													<td class="text-center">Ingreso </td>
												@elseif($r->type == 'Expense')
													<td class="text-center">Gasto </td>
												@else
													<td class="text-center">Renta</td>
												@endif
												
												<td class="text-center">{{ $r->amount }}</td>
												<td class="text-center">
													<img class="rounded text-center" src="images/movs/{{ $r->receipt }}" alt="" height="40">
												</td>
												<td class="text-center">{{ $r->created_at }}</td>
												<td class="text-center">
													@include('common.actions')
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								{{ $info->links() }}
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    @elseif ($action > 1)
		@include('livewire.boxes.form')						
    @endif		
</div>

<script>
	// document.addEventListener('DOMContentLoated', function () {
	// 	window.livewire.on('fileChoosen', () => {
	// 		let inputField = document.getElementById('image')
	// 		let file = inputField.files[0]
	// 		let reader = new FileReader();
	// 		reader.onloadend () = () => {
	// 			window.livewire.emit('fileUpload', reader.result)
	// 		}
	// 		reader.readAsDataURL(file);
	// 	});
	// });

	document.addEventListener('DOMContentLoaded', function () {

      window.livewire.on('fileChoosen', () => {
       console.log($(this))
       let inputField = document.getElementById('image')
       let file = inputField.files[0]
       let reader = new FileReader();
       reader.onloadend = () => {
           window.livewire.emit('fileUpload', reader.result)
       }
       reader.readAsDataURL(file);
   });
  });

	function Confirm(id)
    {
       let me = this
       swal({
        title: 'CONFIRMAR',
        text: '¿DESEAS ELIMINAR EL REGISTRO?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
        closeOnConfirm: false
    },
	    function() {
	        console.log('ID', id);
	        window.livewire.emit('deleteRow', id)    
	        toastr.success('info', 'Registro eliminado con éxito')
	        swal.close()   
	    });

    }

</script>
