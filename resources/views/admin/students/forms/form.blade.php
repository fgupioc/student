<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="title">Informacion del estudiante</h3>
    </div>
    <style>
        .foto{
            width: 100%;
            height: 120px;
        }
    </style>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('first_name','Nombres') !!}
                    {!! Form::text('first_name',null,['id'=>'first_name','class'=>'form-control','placeholder'=>'Nombre completo']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('last_name','Usuario') !!}
                    {!! Form::text('last_name',null,['id'=>'last_name','class'=>'form-control','placeholder'=>'Apellidos']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('sex','Sexo') !!}<br>
                    <label>
                        <input type="radio" name="sex" value="m"> Masculino
                    </label>
                    <label>
                        <input type="radio" name="sex" value="f"> Femenino
                    </label>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('birthday','F. Nacimiento') !!}
                    {!! Form::date('birthday',null,['id'=>'birthday','class'=>'form-control']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('nationality','Nacionalidad') !!}
                    {!! Form::text('nationality',null,['id'=>'nationality','class'=>'form-control','placeholder'=>'Nacionalidad']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('status','Estado') !!}<br>
                    <label>
                        <input type="radio" name="status" value="activo"> Activo
                    </label>
                    <label>
                        <input type="radio" name="status" value="inactivo"> Inactivo
                    </label>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('national_card','Documento Identidad') !!}
                    {!! Form::text('national_card',null,['id'=>'national_card','class'=>'form-control','placeholder'=>'Documento']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('passport','Pasaporte') !!}
                    {!! Form::text('passport',null,['id'=>'passport','class'=>'form-control','placeholder'=>'Pasaporte']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('phone','Telefono') !!}
                    {!! Form::text('phone',null,['id'=>'phone','class'=>'form-control','placeholder'=>'Telefono']) !!}
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    {!! Form::label('email','Correo') !!}
                    {!! Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Correo']) !!}
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="imagen">
                        {!! Html::image('https://image.freepik.com/foto-gratis/estudiante-inteligente-disfrutando-de-un-buen-libro_1154-166.jpg',null,['class'=>'foto','id'
                        =>'showFoto']);
                         !!}
                    </div>
                    <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg" style="display: none">
                    <a class="btn btn-dark" onclick="$('#photo').click();">Foto</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="title">Direccion</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                {!! Form::label('province','Provincia') !!}
                {!! Form::text('province',null,['id'=>'province','class'=>'form-control','placeholder'=>'Provincia']) !!}
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                {!! Form::label('district','Distrito') !!}
                {!! Form::text('district',null,['id'=>'district','class'=>'form-control','placeholder'=>'Distrito']) !!}
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                {!! Form::label('village','Pueblo') !!}
                {!! Form::text('village',null,['id'=>'village','class'=>'form-control','placeholder'=>'Pueblo']) !!}
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                {!! Form::label('commune','Comunidad') !!}
                {!! Form::text('commune',null,['id'=>'commune','class'=>'form-control','placeholder'=>'Comunidad']) !!}
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                {!! Form::label('current_address','Direccion') !!}
                {!! Form::text('current_address',null,['id'=>'current_address','class'=>'form-control','placeholder'=>'Direccion actual']) !!}
            </div>

        </div>
    </div>
</div>