<style>
    .table-details{
        cursor: pointer;
        text-decoration: none;
    }
</style>
<table class="table table-striped table_cursos">
    <thead>
    <tr>
        <th scope="col">Curso</th>
        <th scope="col">Nivel</th>
        <th scope="col">Turno</th>
        <th scope="col">Horario</th>
        <th scope="col">Detalle</th>
        <th scope="col">Opcion</th>
    </tr>
    </thead>
    <tbody class="lista_cursos">
        @foreach($courses as $curso)
        <tr id="fila_{{$curso->id}}">
            <td>{{$curso->program}}</td>
            <td>{{$curso->level}}</td>
            <td>{{$curso->shift}}</td>
            <td>{{$curso->time}}</td>
            <td>
                <a class="table-details" data-id="{{$curso->id}}">
                    Año Academico: {{$curso->academic}}/ Curso:{{$curso->program}}/ Nivel:{{$curso->level}}/ Turno:{{$curso->shift}}/ Horario:{{$curso->time}}/ Numero:
                    {{$curso->batch}}/ Grupo:{{$curso->group}}/ Inicio: {{date('d-m-y',strtotime($curso->start_date))}}/ Fin: {{date('d-m-y',strtotime($curso->end_date))}}
                </a>
            </td>
            <td>
                <a data-id="{{$curso->id}}" class="btn btn-danger btn-sm btn-deleteCurso">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>