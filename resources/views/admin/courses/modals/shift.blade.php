<div class="modal fade" id="modal_shift" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Turno</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'shift.store','method'=>'POST', 'files'=>true, 'id'=>'form-program')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('shift', 'Turno *')!!}
                    {!!Form::text('shift',old('shift'),['id'=>'shift','class'=>'form-control ','placeholder'=>'Nombre del turno'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveShift()">Crear</button>
            </div>
        </div>
    </div>
</div>