<x-layouts.app>
    <div class="row">
        <div class="col-md-6">
            <h4>REGISTRAR NUEVO GRADO</h4>
            <form method="POST" action="{{ route('grades.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="description">Descripción:</label>
                        <input type="text" name="description" class="form-control" autocomplete="off">
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <button type="submit" class="btn btn-primary">Guardar Grado</button>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('grades.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>