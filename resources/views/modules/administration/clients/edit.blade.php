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
                                    <label for="" class="fw-bold mb-2">NOMBRE <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        data-title="Nombre" value="{{ $data->name }}">
                                </div>
                                <div class="col">
                                    <label for="" class="fw-bold mb-2">CORREO ELECTRÓNICO <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        data-title="Unidad de negocio" value="{{ $data->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="fw-bold mb-2">CONTRASEÑA <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        data-title="Contraseña">
                                </div>
                            </div>
                        </div>

                        <div class="col my-5 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" id="btnSubmitEdit">ACTUALIZAR
                                CLIENTE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var dataId = '{{ $data->id }}';
        var returnUrl = "{{ route('administration.client.index') }}"
    </script>

    @vite('resources/js/modules/clients/Update.js')
@endsection
