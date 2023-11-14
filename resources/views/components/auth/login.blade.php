<x-layouts.guest>

    <div class="container ">
        <div class="row justify-content-center gap-3">
            <div class="col-md-5 my-5">
                <div style="text-align: left;" class="pt-5">
                    <img src="{{ asset('assets/images/logo-schlg.png') }}"  class="img-fluid" alt="Logo FSJ18" style="width: 29rem; margin-left: -1.5rem;">
                </div>
                <p style="color:#043679; font-size: 1.2rem; font-weight: bold;" >Optimize management and elevate your school administration...</p>
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <form action="{{ route('loginUser') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <!-- <div style="text-align: center;">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo FSJ18" style="width: 65%;">
                            </div> -->
                            <h2 class="card-title text-center">Iniciar Sesión</h2>
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Correo Electrónico" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Contraseña" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <p class="text-center">Si aun no tienes cuenta, puedes <a href="{{ url('register') }}">Registrarte</a> </p>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>
