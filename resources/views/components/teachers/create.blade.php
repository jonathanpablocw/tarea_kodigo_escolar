<x-layouts.app>
    <h4>REGISTRAR NUEVO PROFESOR</h4>

    <form method="POST" action="{{ route('teachers.store') }}">
        @csrf

        <div class="form-group">
            <label for="first_name">Nombre:</label>
            <input type="text" name="first_name" class="form-control" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" name="last_name" class="form-control" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="age">Edad:</label>
            <input type="number" name="age" class="form-control" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" class="form-control" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Fecha de Nacimiento:</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="address">Dirección:</label>
            <input type="text" name="address" class="form-control" autocomplete="off" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Profesor</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
</x-layouts.app>
