 <div class="widget-content-area ">
 	<div class="widget-one">
 		<form>
 			<h3 class="text-center">Crear/Editar Movimientos</h3>
 			@include('common.messages')        

 			<!--formulario-->
 			<div class="row">
 				<div class="form-group col-lg-4 col-md-4 col-sm-12">
 					<label >Tipo</label>
 					<select wire:model.lazy="type" class="form-control text-center">
 						<option value="Choose">Elegir</option>
 						<option value="Income">Ingreso</option>
 						<option value="Expense">Gasto</option>
 						<option value="Rent">Pago de Renta</option>
 					</select>
 				</div>

 				<div class="form-group col-lg-4 col-md-4 col-sm-12">
 					<label >Monto</label>
 					<input wire:model.lazy="amount" type="number" class="form-control text-center"  placeholder="Ej: 100.00">
 				</div>

 				<div class="form-group col-lg-4 col-md-4 col-sm-12">
 					<label >Comprobante</label>
 					<input  id="image" 
 					wire:change="$emit('fileChoosen',this)" accept="image/x-png,image/gif,image/jpeg"
 					type="file" class="form-control text-center" >
 				</div>

 				<div class="form-group col-lg-12 col-sm-12 mb-8">
 					<label >Ingresa la descripción</label>
 					<input wire:model.lazy="concept" type="text" class="form-control"  placeholder="...">
 				</div>

 			</div>
 			<!--botones guardar/regresar-->
 			<div class="row ">
 				<div class="col-lg-5 mt-2  text-left">
 					<button type="button" wire:click="doAction(1)" class="btn btn-dark mr-1">
 						<i class="mbri-left"></i> Regresar
 					</button>
 					<button type="button"
 					wire:click="StoreOrUpdate() " 
 					class="btn btn-primary ml-2">
 					<i class="mbri-success"></i> Guardar
 				</button>
 			</div>
 		</div>
 		
 	</form>
 </div>
</div>