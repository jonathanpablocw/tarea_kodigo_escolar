<x-layouts.guest>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div style="text-align: center; margin:1rem;">
                                <img src="{{ asset('assets/images/logo-schlg.png') }}" alt="Logo FSJ18" style="width: 50%;">
                            </div>
                            <p class="text-center">Si ya tienes cuenta, puedes <a href="{{ url('/') }}">Iniciar Sesion</a> </p>
                            <h2 class="card-title text-center mb-3">Registro de Usuario</h2>
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nombre" value="{{ old('name') }}" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Correo Electrónico" value="{{ old('email') }}" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <span class="text-primary">La contraseña debe tener al menos 8 digitos</span><br>
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Contraseña" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirmar Contraseña" autocomplete="off" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>
