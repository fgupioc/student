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
                    <form class="form-horizontal form-label-left input_mask" action="{{route('courses.store')}}" id="form-course" method="post">
                        @include('admin.courses.forms.form')
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12 col-sm-12 col-xs-12">
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
    @include('admin.courses.modals.academic')
    @include('admin.courses.modals.program')
    @include('admin.courses.modals.level')
    @include('admin.courses.modals.shift')
    @include('admin.courses.modals.time')
    @include('admin.courses.modals.batch')
    @include('admin.courses.modals.group')
@endsection
@section('scripts')
    @include('admin.courses.scrips.academic')
    @include('admin.courses.scrips.program')
    @include('admin.courses.scrips.level')
    @include('admin.courses.scrips.time')
    @include('admin.courses.scrips.batch')
    @include('admin.courses.scrips.group')

    <script>
        (function () {
           ifDataTable();
        })();

        function ifDataTable() {
            let flag = false;
            $(".lista_cursos tr").each(function( index, value ) {
                flag =  true;
            });

            if(flag){
               $(".table_cursos").show();
            }else{
                $(".table_cursos").hide();
            }

        }

        const formCurso = $("#form-course");
        formCurso.submit(function (e) {
            e.preventDefault();
            const datos = $(this).serialize();
            const url = $(this).attr('action');
            const method = $(this).attr('method');

            $.ajax({
                headers: {'X-CSRF-TOKEN': token},
                type: method,
                dataType: 'JSON',
                url: url,
                data: datos,
                beforeSend: function () {
                    //btn.prop('disabled', true);
                },
                success: function (response) {
                    let html = generateHtml(response);
                    $('.lista_cursos').prepend(html);
                    ifDataTable();
                },
                complete: function () {
                    //btn.prop('disabled', false);
                }
            });
        });

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
        
        $(".btn-deleteCurso").click(function () {
            const id  = $(this).data("id");
            $(`#fila_${id}`).remove();
            ifDataTable();
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#start_date').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1",
                format: 'YYYY-MM-DD'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#end_date').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1",
                format: 'YYYY-MM-DD'
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

        });
    </script>

@endsection