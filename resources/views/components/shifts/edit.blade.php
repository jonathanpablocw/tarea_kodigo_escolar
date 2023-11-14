<x-layouts.app>
    <h4>Editar Turno</h4>
    <form method="POST" action="{{ route('shifts.update', $shift->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ $shift->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <input type="text" name="description" class="form-control" value="{{ $shift->description }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        <a href="{{ route('shifts.index') }}" class="btn btn-danger mt-3">Cancelar</a>
    </form>
</x-layouts.app>
