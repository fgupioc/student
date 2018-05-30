<div class="modal fade" id="modal_academic" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Periodo Academico</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'academic.store','method'=>'POST', 'files'=>true, 'id'=>'form-academic')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('text', 'Periodo *')!!}
                    {!!Form::text('academic',old('academic'),['id'=>'academic','class'=>'form-control ','placeholder'=>'Periodo academico'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveAcademic()">Crear</button>
            </div>
        </div>
    </div>
</div>