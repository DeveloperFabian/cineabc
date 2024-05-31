@extends('layouts.administration.app')
@section('content')
    <div class="row-reverse">
        <div class="card card-body shadow">
            <div class="col mt-3 mb-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Actualizar cliente</h2>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('administration.client.index') }}" class="btn btn-primary">VER
                            REGISTROS</a>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <form id="formUpdate">
                    <div class="row-reverse">
                        <div class="col mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="fw-bold mb-2">TITULO <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $data->title }}" data-title="TITULO" >
                                </div>
                                <div class="col">
                                    <label for="email" class="fw-bold mb-2">DIRECTOR <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="director" id="director" data-title="DIRECTOR" class="form-control" value="{{ $data->director }}"
                                        >
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="fw-bold mb-2">AÑO DE LANZAMIENTO <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="date" name="year" id="year" class="form-control" value="{{ $data->year }}"
                                    data-title="AÑO DE LANZAMIENTO">
                                </div>
                                <div class="col">
                                    <label for="email" class="fw-bold mb-2">GENERO <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="genre" id="genre" class="form-control" value="{{ $data->genre }}"
                                    data-title="GENERO">
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="fw-bold mb-2">DURACION <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="number" name="time" id="time" class="form-control" value="{{ $data->time }}"
                                    data-title="DURACION">
                                </div>
                                <div class="col">
                                    <label for="email" class="fw-bold mb-2">CLASIFICACION <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="classification" id="classification" class="form-control"
                                    data-title="CLASIFICACION" value="{{ $data->classification }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col my-5 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" id="btnSubmitEdit">ACTUALIZAR PELICULA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var dataId = '{{ $data->id }}';
        var returnUrl = "{{ route('administration.movie.index') }}"
    </script>

    @vite('resources/js/modules/movies/Update.js')
@endsection
