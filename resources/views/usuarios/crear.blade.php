@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if($errors->any())
                        <div class="alert alert-dark alert-dismissible fadeshow" role="alert">
                            <strong>Revise los campos</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Clase">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {!! Form::open(array('route'=>'usuarios.store','method'=>'POST')) !!}

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="cedula">cedula</label>
                                    {!! Form::text('cedula', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="fecha">Fecha Nacimiento</label>
                                    {!! Form::date('fecha', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    {!! Form::text('apellidos', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::text('email', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    {!! Form::text('celular', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    {!! Form::text('direccion', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    {!! Form::text('telefono', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    {!! Form::password('password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Contraseña</label>
                                    {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Roles</label>
                                    {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection