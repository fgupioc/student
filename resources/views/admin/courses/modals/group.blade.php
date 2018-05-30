<div class="modal fade" id="modal_group" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Grupo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'group.store','method'=>'POST', 'files'=>true, 'id'=>'form-group')) !!}
                {{csrf_field()}}
                <div class="form-group">
                    {!!Form::label('group', 'Grupo *')!!}
                    {!!Form::text('group',old('group'),['id'=>'group','class'=>'form-control ','placeholder'=>'Numero de grupo'])!!}

                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveGroup()">Crear</button>
            </div>
        </div>
    </div>
</div>