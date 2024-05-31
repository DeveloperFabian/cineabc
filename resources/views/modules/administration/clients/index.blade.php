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
                                    <h2 class="fw-bold ">Listado de clientes</h2>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a href="{{ route('administration.client.create') }}"
                                        class="btn btn-primary">REGISTRAR
                                        CLIENTE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5 table-responsive">
                            <table class="table table-hover" id="listClient">
                                <thead class="bg-table-head">
                                    <tr>
                                        <th scope="col" class="">NOMBRE</th>
                                        <th scope="col" class="">CORREO ELECTRÓNICO</th>
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
        var listUrl = "{{ route('administration.client.list') }}"
        var editUrl = "{{ route('administration.client.edit', ':id') }}"
        var deleteUrl = "{{ route('administration.client.delete', ':id') }}"
        var returnUrl = "{{ route('administration.client.index') }}"
    </script>

    @vite('resources/js/modules/clients/List.js')
    @vite('resources/js/modules/clients/Delete.js')
@endsection
