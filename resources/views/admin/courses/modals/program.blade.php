<div class="modal fade" id="modal_program" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Curso</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'program.store','method'=>'POST', 'files'=>true, 'id'=>'form-program')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('program', 'Curso *')!!}
                    {!!Form::text('program',old('program'),['id'=>'program','class'=>'form-control ','placeholder'=>'Nombre del curso'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveProgram()">Crear</button>
            </div>
        </div>
    </div>
</div>