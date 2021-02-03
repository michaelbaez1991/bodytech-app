@extends('layout')

@section('content') 
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> --}}
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
                        <h2>Registro de paticipantes</h2>
                        </div>
                    <div class="card-body">
                        <form action="{{ route('creatRregister') }}" method="POST" >
                            {{ csrf_field() }}

                            {{-- IDENTIFICACION --}}
                            <div class="form-group">
                                <label for="identificacion">Identificación</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                            </div>

                            {{-- TIPO IDENTIFICACION --}}
                            <div class="form-group">
                                <label for="t_identificacion">Tipo identificación</label>
                                <select class="form-control" id="t_identificacion" name="t_identificacion" required>
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
                                <label for="p_nombre">Primer nombre</label>
                                <input type="text" class="form-control" id="p_nombre" name="p_nombre" required>
                            </div>

                            {{-- SEGUNDO NOMBRE --}}
                            <div class="form-group">
                                <label for="s_nombre">Segundo nombre</label>
                                <input type="text" class="form-control" id="s_nombre" name="s_nombre" required>
                            </div>
        
                            {{-- PRIMER APELLIDO --}}
                            <div class="form-group">
                                <label for="p_apellido">Primer apellido</label>
                                <input type="text" class="form-control" id="p_apellido" name="p_apellido" required>
                            </div>

                            {{-- SEGUNDO APELLIDO --}}
                            <div class="form-group">
                                <label for="s_apellido">Segundo apellido</label>
                                <input type="text" class="form-control" id="s_apellido" name="s_apellido" required>
                            </div>

                            {{-- DIRECCION --}}
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
        
                            {{-- TELEFONO --}}
                            <div class="form-group">
                                <label for="telefono">Celular</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
        
                            {{-- CORREO --}}
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>

                            {{-- OCUPACION --}}
                            <div class="form-group">
                                <label for="ocupacion">Ocupación</label>
                                <input type="text" class="form-control" id="ocupacion" name="ocupacion" required>
                            </div>

                            {{-- DEPARTAMENTO --}}
                            <div class="form-group">
                                <label for="departamento_id">Departamento</label>
                                <select class="form-control" id="departamento_id" name="departamento_id" required>
                                    <option disabled selected>...</option>
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            {{-- CIUDAD --}}
                            <div class="form-group">
                                <label for="ciudad_id">Municipio</label>
                                <select class="form-control" id="ciudad_id" name="ciudad_id" required>
                                </select>
                            </div>
                    </div>

                    <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="col-3">
                <br><br><br><br><br><br><br><br>
                <p class="text-center">
                Click <a href="{{ route('exportExcel') }}">aquí</a> para descargar en Lista de registros en excel.
                </p>
            </div> --}}
        </div>
    {{-- </div> --}}
@endsection