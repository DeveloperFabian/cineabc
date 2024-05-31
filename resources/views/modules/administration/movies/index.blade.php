@extends('layouts.administration.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row-reverse" id="list">
                        <div class="col mt-3 mb-5">
                            <div class="row">
                                <div class="col">
                                    <h2 class="fw-bold ">Listado de peliculas</h2>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a href="{{ route('administration.movie.create') }}"
                                        class="btn btn-primary">REGISTRAR
                                        PELICULA</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5 table-responsive">
                            <table class="table table-hover" id="listMovie">
                                <thead class="bg-table-head">
                                    <tr>
                                        <th scope="col" class="">TITULO</th>
                                        <th scope="col" class="">DIRECTOR</th>
                                        <th scope="col" class="">AÑO DE LANZAMIENTO</th>
                                        <th scope="col" class="">GENERO</th>
                                        <th scope="col" class="">DURACION</th>
                                        <th scope="col" class="">CLASIFICACION</th>
                                        <th scope="col" class="">FECHA CREACIÓN</th>
                                        <th scope="col" class="">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var listUrl = "{{ route('administration.movie.list') }}"
        var editUrl = "{{ route('administration.movie.edit', ':id') }}"
        var deleteUrl = "{{ route('administration.movie.delete', ':id') }}"
        var returnUrl = "{{ route('administration.movie.index') }}"
    </script>

    @vite('resources/js/modules/movies/List.js')
    @vite('resources/js/modules/movies/Delete.js')
@endsection
