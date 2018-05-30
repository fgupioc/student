@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title" style="border: 0">
                    <h2>Form Design
                        <small>different form elements</small>
                    </h2>
                </div>
                <div class="x_content">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="title">Seleccionar Curso</h3>
                        </div>
                        <div class="panel-body">
                            <a  class="btn btn-primary" style="margin-top: 23px" data-toggle="modal" data-target="#modal_courses">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    {!! Form::open(['route'=>'students.store','method'=>'POST', 'files'=>true, 'id'=>'form-student']) !!}
                        {!! csrf_field() !!}                       
                        <div class="col-md-12">
                            @include('admin.students.forms.form')
                        </div>
                       <div class="btn-group">
                           {!! Form::submit("Guardar",['class' => 'btn btn-primary']) !!}
                       </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> 
    @include('admin.students.modals.courses')
@endsection
@section('scripts')
<script>
    let foto = $("#photo");
    let imagen = $("#showFoto");
    let academico = $("#academic_id");
    let programa = $("#program_id");
    let nivel = $("#level_id");
    let turno = $("#shift_id");
    let hora = $("#time_id");
    let nuemeroGrupo = $("#batch_id");
    let grupo = $("#group_id");

    function datosFomulario() {
        return $("#form-searchCourses").serialize();
    }
    function generateHtml(obj) {
        return ` <tr id="fila_${obj.id}">
            <td>${obj.program}</td>
            <td>${obj.level}</td>
            <td>${obj.shift}</td>
            <td>${obj.time}</td>
            <td>
                <a href="#" data-id="${obj.id}">
                    Año Academico: ${obj.academic}/ Curso:${obj.program}/ Nivel:${obj.level}/ Turno:${obj.shift}/ Horario:${obj.time}/ Numero:
                    ${obj.batch}/ Grupo:${obj.group}/ Inicio: ${obj.start_date}/ Fin: ${obj.end_date}
                </a>
            </td>
            <td>
                <a data-id="${obj.id}" class="btn btn-danger btn-sm btn-deleteCurso">Eliminar</a>
            </td>
        </tr>`;
    }
    function showData() {
        const _url = "{{route('getSearchCourses')}}";
        $.ajax({
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'JSON',
            url: _url,
            data: datosFomulario(),
            success: function (response){
               $('.lista_cursos').empty();
                let html = "";
                $.each(response, function (index, dato) {
                    html +=  generateHtml(dato);
                });
                $('.lista_cursos').append(html);
            },
        });

    }
    academico.change(function () {
       showData()
    });

    programa.change(function () {
        const _url = "{{route('getProgramLevels')}}";
        if($(this).val().length>0){
            $.ajax({
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'JSON',
                url: _url,
                data: {id:$(this).val()},
                success: function (response) {
                    nivel.empty().selectpicker("refresh");
                    if(!$.isEmptyObject(response.levels)){
                        nivel.append('<option selected="selected" value="">----------------------------------------</option>');
                        $.each(response.levels, function (index, dato) {
                            nivel.append($("<option/>",{
                                value: dato.id,
                                text : dato.level
                            }));
                        });
                        nivel.selectpicker("refresh");
                    }
                },
            });
        }else{
            nivel.empty().selectpicker("refresh");
        }
        showData();
    });

    nivel.change(function () {
        showData();
    });
    turno.change(function () {
        showData();
    });

    $('.lista_cursos').on('click','.table-details',function () {
        const id = $(this).data('id');
        console.log(id);
    });




    foto.change(function () {
        showFile(this,imagen);
    });

    function showFile(fileInput,img,showName) {
        if(fileInput.files[0]){
            let render = new FileReader();
            render.onload = function (e) {
                $(img).attr('src',e.target.result);
            };
            render.readAsDataURL(fileInput.files[0]);
        }
        //$(showName).text(fileInput.files[0].name);
    }

</script>
@endsection
