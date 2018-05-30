<div class="modal fade" id="modal_time" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Horario</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'time.store','method'=>'POST', 'files'=>true, 'id'=>'form-time')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('time', 'Horario *')!!}
                    {!!Form::text('time',old('time'),['id'=>'time','class'=>'form-control ','placeholder'=>'Nombre del horario'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveTime()">Crear</button>
            </div>
        </div>
    </div>
</div>