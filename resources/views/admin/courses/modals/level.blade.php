<div class="modal fade" id="modal_level" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Nivel</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'level.store','method'=>'POST', 'files'=>true, 'id'=>'form-level')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {{Form::label('program_id', 'Cursos')}}
                    {{Form::select('program_id',$programs, null, ['id'=>'program_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
                </div>
                <div class="form-group">
                    {!!Form::label('level', 'Nivel *')!!}
                    {!!Form::text('level',old('level'),['id'=>'level','class'=>'form-control ','placeholder'=>'Nivel'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveLevel()">Crear</button>
            </div>
        </div>
    </div>
</div>