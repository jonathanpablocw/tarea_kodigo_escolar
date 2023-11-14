<x-layouts.app>
    <h4>Editar Materia</h4>
    <form method="POST" action="{{ route('subject.update', $subject->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ $subject->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <input type="text" name="description" class="form-control" value="{{ $subject->description }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        <a href="{{ route('subject.index') }}" class="btn btn-danger mt-3">Cancelar</a>
    </form>
</x-layouts.app>
