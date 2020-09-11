@extends('layouts.template')

@section('content')
    <div class="layout-px-spacing">
        @if ($action == 1)
        {{-- <div class="row layout-top-spacing" id="cancel-row"> --}}
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-4">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <h5><b>Tipos de Vehículos</b></h5>
                            </div>
                        </div>
                    </div>
                    @include('common.search')
                    @include('common.alerts')
                    <div class="table-responsive mb-4 mt-4">
                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Creado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as $r)
                                    <tr>
                                        <td><p class="mb-0">{{ $r->id }}</p></td>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->description }}</td>
                                        <td>{{ $r->created_at }}</td>
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
        {{-- </div> --}}
        @elseif
            @include('livewire.types.form')
        @endif
    </div>
    <script type="text/javascript">
        function Confirm(id) {
            let me = this
            swal({
                title: 'Confirmar',
                text: '¿Desea eliminar el registro?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtomText: 'Aceptar',
                cancelButtonText: 'Cancelar',
                closeOnConfirm: false
            },
            function(){
                console.log('Id', id);
                window.livewire.emit('deleteRow', id)
                toastr.success('info', 'Registro eliminado con éxito!')
                swal.close()
            })
        }
        document.addEventListener('DOMContentLoated', function(){

        });
    </script>
    
@endsection