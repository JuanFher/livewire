<div class="row layout-top-spacing">
	<div class="col-sm-12 col-md-12 col-lg-12 layout-spacing">
		@if ($action == 1)
			<div class="widget-content-area br-4">
				<div class="widget-header">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h5><b>Cajones de estacionamiento</b></h5>
						</div>
					</div>
				</div>
				@include('common.search')
				@include('common.alerts')
				<div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                    <thead>
							<tr>
								<th class="text-center">ID</th>
	                            <th class="text-center">DESCRIPCIÓN</th>
	                            <th class="text-center">ESTADO</th>
	                            <th class="text-center">TIPO</th>
	                            {{-- <th class="text-center">IMÁGEN</th> --}}
	                            <th class="text-center">ACCIONES</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($info as $r)
								<tr>
									<td>{{ $r->id }}</td>
									<td>{{ $r->description }}</td>
									@if ( $r->status == 'AVAILABLE' )
										<td>Disponible</td>
									@else
										<td>Ocupado</td>
									@endif
									<td>{{ $r->type }}</td>
									<td class="text-center">@include('common.actions')</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $info->links() }}
				</div>
			</div>
		@elseif ($action == 2)
		    @include('livewire.drawers.form')
		@endif
	</div>
</div>

<script>
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
    })
 }
</script>