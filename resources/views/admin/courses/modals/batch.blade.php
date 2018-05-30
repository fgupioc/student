<div class="modal fade" id="modal_batch" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Numero de Grupo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'batch.store','method'=>'POST', 'files'=>true, 'id'=>'form-batch')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('batch', 'Numero *')!!}
                    {!!Form::text('batch',old('batch'),['id'=>'batch','class'=>'form-control ','placeholder'=>'Numero'])!!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveBatch()">Crear</button>
            </div>
        </div>
    </div>
</div>