@extends('layouts.auth_app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Registro</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cedula">Cedula</label><span
                                    class="text-danger">*</span>
                            <input id="cedula" type="text"
                                   class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}"
                                   name="cedula"
                                   tabindex="1" placeholder="Ingrese cedula" value="{{ old('cedula') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('cedula') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   tabindex="1" placeholder="Enter Full Name" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha">Fecha de Nacimiento</label><span
                                    class="text-danger">*</span>
                            <input id="fecha" type="date"
                                   class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}"
                                   name="fecha"
                                   tabindex="1" placeholder="Ingrese fecha" value="{{ old('fecha') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('fecha') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label><span
                                    class="text-danger">*</span>
                            <input id="apellidos" type="text"
                                   class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}"
                                   name="apellidos"
                                   tabindex="1" placeholder="Ingrese apellidos" value="{{ old('apellidos') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('apellidos') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label><span
                                    class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Enter Email address" name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular</label><span
                                    class="text-danger">*</span>
                            <input id="celular" type="text"
                                   class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}"
                                   name="celular"
                                   tabindex="1" placeholder="Ingrese celular" value="{{ old('celular') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('celular') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Telefono</label><span
                                    class="text-danger">*</span>
                            <input id="telefono" type="text"
                                   class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                                   name="telefono"
                                   tabindex="1" placeholder="Ingrese telefono" value="{{ old('telefono') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">Password
                                :</label><span
                                    class="text-danger">*</span>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
                                   placeholder="Set account password" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">Confirm Password:</label><span
                                    class="text-danger">*</span>
                            <input id="password_confirmation" type="password" placeholder="Confirm account password"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Already have an account ? <a
                href="{{ route('login') }}">SignIn</a>
    </div>
@endsection
