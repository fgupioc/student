{{csrf_field()}}
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('academic_id', 'Año academico')}}
        {{Form::select('academic_id',$academics, null, ['id'=>'academic_id','class'=>'form-control selectpicker',
      'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_academic">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('program_id', 'Curso')}}
        {{Form::select('program_id',$programs, null, ['id'=>'program_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_program">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('level_id', 'Nivel')}}
        {{Form::select('level_id',[], null, ['id'=>'level_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_level">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('shift_id', 'Turno')}}
        {{Form::select('shift_id',$shifts, null, ['id'=>'shift_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_shift">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('time_id', 'Tiempo')}}
        {{Form::select('time_id',$times, null, ['id'=>'time_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_time">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-2 col-sm-2 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('batch_id', 'Numero')}}
        {{Form::select('batch_id',$batches, null, ['id'=>'batch_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_batch">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-2 col-sm-2 col-xs-12 form-group">
    <div class="col-md-10 col-sm-10 col-xs-10">
        {{Form::label('group_id', 'Grupo')}}
        {{Form::select('group_id',$groups, null, ['id'=>'group_id','class'=>'form-control selectpicker',
        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2">
        <a class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_group">
            <span class="fa fa-plus" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    {{Form::label('start_date', 'Fecha Inicio')}}
    {{Form::text('start_date', null, ['id'=>'start_date','class'=>'form-control'])}}
</div>
<div class="col-md-4 col-sm-4 col-xs-12 form-group">
    {{Form::label('end_date', 'Fecha Fin')}}
    {{Form::text('end_date', null, ['id'=>'end_date','class'=>'form-control'])}}
</div>