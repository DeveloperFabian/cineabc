<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Correo electrónico</label>
                        <input class="form-control form-control-lg" type="email" name="email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Contraseña</label>
                        <input class="form-control form-control-lg" type="password" name="password" />
                    </div>
                    @if ($errors->any())
                        <span class="my-5 text-danger fw-bold">Tus credenciales no son válidas</span>
                    @endif
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
