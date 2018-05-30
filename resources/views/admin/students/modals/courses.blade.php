<div class="modal fade" id="modal_courses" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Seleccionar Cursos</h4>
            </div>
            <div class="modal-body">
               <div class="row">
                   <div class="col-md-12">
                    {!! Form::open(array('route'=>'getSearchCourses','method'=>'POST','id'=>'form-searchCourses')) !!}
                 {!! csrf_field() !!}                
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">                    
                        {{Form::label('academic_id', 'Año academico')}}
                        {{Form::select('academic_id',$academics, null, ['id'=>'academic_id','class'=>'form-control selectpicker',
                      'data-live-search'=>"true",'placeholder'=>'----------------------------------------'])}}
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    
                        {{Form::label('program_id', 'Curso')}}
                        {{Form::select('program_id',$programs, null, ['id'=>'program_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'placeholder'=>'----------------------------------------'])}}
                     
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    
                        {{Form::label('level_id', 'Nivel')}}
                        {{Form::select('level_id',[], null, ['id'=>'level_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'placeholder'=>'----------------------------------------'])}}
                     
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    
                        {{Form::label('shift_id', 'Turno')}}
                        {{Form::select('shift_id',$shifts, null, ['id'=>'shift_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'placeholder'=>'----------------------------------------'])}}
                     
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    
                        {{Form::label('time_id', 'Tiempo')}}
                        {{Form::select('time_id',$times, null, ['id'=>'time_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
                     
                    
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                    
                        {{Form::label('batch_id', 'Numero')}}
                        {{Form::select('batch_id',$batches, null, ['id'=>'batch_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
                     
                    
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 form-group">                    
                        {{Form::label('group_id', 'Grupo')}}
                        {{Form::select('group_id',$groups, null, ['id'=>'group_id','class'=>'form-control selectpicker',
                        'data-live-search'=>"true",'title'=>'----------------------------------------'])}}
                     
                    
                </div>
                {!! Form::close() !!}
               </div>
               <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="title">LIsta de cursos</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.courses.inc.table_show')
                        </div>
                    </div>
               </div>
               </div>
            </div> 
        </div>
    </div>
</div>