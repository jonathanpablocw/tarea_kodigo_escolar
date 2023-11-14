<x-layouts.app>
    <h4>Editar Profesor</h4>
    <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="first_name">Nombres:</label>
            <input type="text" name="first_name" class="form-control" value="{{ $teacher->first_name }}" required>
        </div>

        <div class="form-group">
            <label for="last_name">Apellidos:</label>
            <input type="text" name="last_name" class="form-control" value="{{ $teacher->last_name }}" required>
        </div>

        <div class="form-group">
            <label for="age">Edad:</label>
            <input type="number" name="age" class="form-control" value="{{ $teacher->age }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Fecha de Nacimiento:</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $teacher->date_of_birth }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="address">Dirección:</label>
            <input type="text" name="address" class="form-control" value="{{ $teacher->address }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
</x-layouts.app>
