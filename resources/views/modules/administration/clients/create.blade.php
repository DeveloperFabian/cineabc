@extends('layouts.administration.app')
@section('content')
    <div class="row-reverse">
        <div class="card card-body shadow">
            <div class="col mt-3 mb-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Creación de cliente</h2>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('administration.client.index') }}" class="btn btn-primary">VOLVER</a>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <form action="{{ route('administration.client.store') }}" method="POST">
                    @csrf
                    <div class="row-reverse">
                        <div class="col mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="fw-bold mb-2">NOMBRE <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        data-title="Nombre" value="" required>
                                </div>
                                <div class="col">
                                    <label for="email" class="fw-bold mb-2">CORREO ELECTRÓNICO <span
                                            class="text-danger fw-bold">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        data-title="Correo electrónico" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <label for="password" class="fw-bold mb-2">CONTRASEÑA <span
                                    class="text-danger fw-bold">*</span></label>
                            <input name="password" id="password" class="form-control" type="password" required>
                        </div>

                        <div class="col my-5 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" id="btnSubmitCreate">CREAR CLIENTE</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        var returnUrl = "{{ route('administration.client.index') }}"
    </script>
@endsection
