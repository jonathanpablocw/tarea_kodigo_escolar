<x-layouts.app>
    <div class="row">
        <div class="col-md-6">
            <h4>Editar Grado</h4>
            <form method="POST" action="{{ route('grades.update', $grade->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" class="form-control" value="{{ $grade->name }}" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="description">Descripción:</label>
                        <input type="text" name="description" class="form-control" value="{{ $grade->description }}">
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
