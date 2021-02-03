@extends('layout')

@section('content') 
    <div class="row">
        <div class="col-3">
            <br><br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('winner'))
                <div class="alert alert-success">
                    <h4>Tenemos un ganador:</h4> <br>
                    @foreach (session('winner') as $datos)
                        <p>Nombre: {{ $datos->nombre }}</p><br>
                        <p>Apellido: {{ $datos->apellido }}</p><br>
                        <p>Cedula: {{ $datos->cedula }}</p><br>
                        <p>Celular: {{ $datos->celular }}</p><br>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="col-6"><br>
            <div class="card">
                <div class="card-header text-center">
                    <h2>Nuevo cliente</h2>
                    </div>
                <div class="card-body">
                    <form action="/personas" method="POST" >
                        {{ csrf_field() }}

                        {{-- IDENTIFICACION --}}
                        <div class="form-group">
                            <label for="identificacion">Identificación</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion">
                        </div>

                        {{-- TIPO IDENTIFICACION --}}
                        <div class="form-group">
                            <label for="tipo_identificacion">Tipo identificación</label>
                            <select class="form-control" id="tipo_identificacion" name="tipo_identificacion">
                                <option disabled selected>...</option>
                                <option value="CC">CC</option>
                                <option value="RC">RC</option>
                                <option value="TI">TI</option>
                                <option value="AS">AS</option>
                                <option value="MS">MS</option>
                                <option value="PA">PA</option>
                            </select>
                        </div>

                        {{-- PRIMER NOMBRE --}}
                        <div class="form-group">
                            <label for="primer_nombre">Primer nombre</label>
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre">
                        </div>

                        {{-- SEGUNDO NOMBRE --}}
                        <div class="form-group">
                            <label for="segundo_nombre">Segundo nombre</label>
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre">
                        </div>
    
                        {{-- PRIMER APELLIDO --}}
                        <div class="form-group">
                            <label for="primer_apellido">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido">
                        </div>

                        {{-- SEGUNDO APELLIDO --}}
                        <div class="form-group">
                            <label for="segundo_apellido">Segundo apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
                        </div>

                        {{-- DIRECCION --}}
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
    
                        {{-- TELEFONO --}}
                        <div class="form-group">
                            <label for="telefono">Celular</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
    
                        {{-- CORREO --}}
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                        </div>

                        {{-- OCUPACION --}}
                        <div class="form-group">
                            <label for="ocupacion">Ocupación</label>
                            <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                        </div>

                        {{-- DEPARTAMENTO --}}
                        <div class="form-group">
                            <label for="departamento_id">Departamento</label>
                            <select class="form-control" id="departamento_id" name="departamento_id">
                                <option disabled selected>...</option>
                                @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        {{-- MUNICIPIO --}}
                        <div class="form-group">
                            <label for="ciudad_id">Municipio</label>
                            <select class="form-control" id="ciudad_id" name="municipio_id">
                            </select>
                        </div>
                </div>

                <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection