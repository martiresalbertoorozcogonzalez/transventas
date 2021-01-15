@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous"/>
@endsection

@section('content')

    @if (session('estado'))
    <div class="alert alert-primary">
        {{ session('estado') }}
    </div>
    @endif


    <div class="container p-4">
        <h1 class="text-center mt-4">Crear Publicacion</h1>
        <div class="mt-5 row justify-content-center">

            <form class="col-md-9 col-xs-12 card card-body" action="{{ route('publicaciones.store') }}" method="POST" enctype="multipart/form-data" novalidate>
               @csrf

                <fieldset class="border p-4">
                    <legend class="text-primary text-center">TITULO E IMAGEN PRICIPAL</legend>
                    <div class="form-group">

                        @foreach ($users as $user)

                            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}"
                                {{ old('user_id') == $user->id ? 'selected' : '' }}>

                        @endforeach

                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control @error('titulo')  is-invalid  @enderror" id="titulo"
                                    placeholder="Titulo para la publicacion" name="titulo" value="{{ old('titulo') }}">

                                @error('titulo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>


                        <div class="col-md-6">

                            <label for="ubicacion_id">Ubicacion del Vehiculo</label>

                            <select class="form-control @error('ubicacion_id') is-invalid @enderror" name="ubicacion_id"
                                id="ubicacion_id">
                                <option value="" selected disabled>-- Seleccione --</option>

                                @foreach ($ubicacion as $ubi)
                                    <option value="{{ $ubi->id }}"
                                        {{ old('ubi_id') == $ubi->id ? 'selected' : '' }}>{{ $ubi->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            </div>

                    </div>
                    <div class="form-group">
                        <label for="imagen_principal">Imagen Principal de la publicacion</label>
                        <input
                          id="imagen_principal"
                          type="file"
                          class="form-control @error('imagen_principal') is-invalid @enderror"
                          name="imagen_principal"
                          value="{{old('imagen_principal')}}"
                        >

                        @error('imagen_principal')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror

                    </div>


                </fieldset>


                <fieldset class="border p-4 mt-5 text-center">
                    <legend  class="text-primary">IINFORMACION GENERAL DEL VEHICULO</legend>


                    <div class="form-row">

                        <div class="col-md-6">

                            <label for="category_id">Categoria del Vehiculo</label>

                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                id="category_id">
                                <option value="" selected disabled>-- Seleccione --</option>

                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}"
                                        {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            </div>

                        <div class="col-md-6">

                            <label for="modelo_id">Modelo del Vehiculo</label>

                            <select class="form-control @error('modelo_id') is-invalid @enderror" name="modelo_id"
                                id="modelo_id">
                                <option value="" selected disabled>-- Seleccione --</option>

                                @foreach ($modelo as $modelo)
                                    <option value="{{ $modelo->id }}"
                                        {{ old('modelo_id') == $modelo->id ? 'selected' : '' }}>{{ $modelo->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            </div>

                    </div>

                    <div class="form-group mt-3 row">


                        <div class="col-md-6">

                            <label for="condicion_id">Condicion del Vehiculo</label>

                            <select class="form-control @error('condicion_id') is-invalid @enderror" name="condicion_id"
                                id="condicion_id">
                                <option value="" selected disabled>-- Seleccione --</option>

                                @foreach ($condicion as $con)
                                    <option value="{{ $con->id }}"
                                        {{ old('con_id') == $con->id ? 'selected' : '' }}>{{ $con->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            </div>


                        <div class="col-md-6">

                            <label for="precio">Precio</label>
                            <input type="text" class="form-control @error('precio')  is-invalid  @enderror" id="precio"
                                placeholder="Precio para el vehiculo" name="precio" value="{{ old('precio') }}">

                            @error('precio')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                          </div>



                    </div>

                    <div class="form-group mt-3 row">
                      <div class="col-md-6">
                        <label for="apertura">Hora Apertura:</label>
                        <input
                            type="time"
                            class="form-control @error('apertura')  is-invalid  @enderror"
                            id="apertura"
                            name="apertura"
                            value="{{ old('apertura') }}"
                        >
                        @error('apertura')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="nombre">Hora Cierre:</label>
                        <input
                            type="time"
                            class="form-control @error('cierre')  is-invalid  @enderror"
                            id="cierre"
                            name="cierre"
                            value="{{ old('cierre') }}"
                        >
                        @error('cierre')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                    </div>


                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="millaje">Millaje</label>
                            <input type="text" class="form-control @error('millaje')  is-invalid  @enderror" id="millaje"
                                placeholder="Millaje o Kilometraje" name="millaje" value="{{ old('millaje') }}">

                            @error('millaje')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                        <div class="col-md-6">

                        <label for="telefono">Telefono de contacto (opcional)</label>
                        <input type="text" class="form-control @error('telefono')  is-invalid  @enderror" id="telefono"
                            placeholder="telefono" name="telefono" value="{{ old('telefono') }}">

                        @error('telefono')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="descripcion">Descripción completa Vehiculo</label>
                        <textarea
                            class="form-control  @error('descripcion')  is-invalid  @enderror"
                            name="descripcion"
                        >{{ old('descripcion') }}</textarea>

                            @error('descripcion')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    {{--  Campos para subir imagenes con Dropzone  --}}
                    <br>
                    <div class="form-group">
                            <label for="imagenes">Imagenes de la Publicacion</label>
                            <div id="dropzone" class="dropzone rounded bg-gray-100"></div>
                    </div>

                </fieldset>

                <input type="hidden" id="uuid" name="uuid" value="{{ Str::uuid()->toString()}}">
                <input type="submit" class="btn btn-primary mt-3 d-block" value="Craer Publicacion">

            </form>

        </div>
    </div>

@endsection

@section('scripts')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous" defer></script>

@endsection
