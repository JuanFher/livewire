<!-- Modal -->
<div class="modal fade" id="modalRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
                </button>
            </div>
            <div class="modal-body">
                <div class="widget-content-area">
					<div class="widget-one">
						<form>
							@include('common.messages')
							<div class="row">
								<div class="form-group col-lg-4 col-md-4 col-sm-12">
									<label>Tiempo</label>
									<select id="time" class="form-control text-center">
										<option value="Choose">Elegir</option>
										<option value="Fraction">Fracción</option>
										<option value="Hour">Hora</option>
										<option value="Day">Día</option>
										<option value="Week">Semana</option>
										<option value="Biweekly">Quincenal</option>
										<option value="Month">Mes</option>
									</select>
								</div>
								<div class="form-group col-lg-4 col-md-4 col-sm-12">
									<label>Tipo</label>
									<select id="type" class="form-control text-center">
										<option value="Choose">Elegir</option>
										@foreach ($types as $t)
											<option value="{{ $t->id }}">{{ $t->description }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-lg-4 col-md-4 col-sm-12">
									<label>Costo</label>
									<input type="number" id="cost" class="form-control text-center" placeholder="1.00">
								</div>
								<div class="form-group col-lg-8 mb-8 col-sm-12">
									<label>Descripción</label>
									<input type="text" id="description" class="form-control text-center" placeholder="...">
								</div>
								<div class="form-group col-lg-4 col-md-4 col-sm-12">
									<label>Secuencial</label>
									<input type="text" id="position" class="form-control text-center" disabled value="{{ $position }}">
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                <button type="button" onclick="save()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>