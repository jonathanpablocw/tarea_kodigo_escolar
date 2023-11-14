<x-layouts.app>
    <h4>Editar Calificación</h4>
    <form method="POST" action="{{ route('qualifications.update', $qualification->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_id">Estudiante:</label>
            <select name="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $qualification->student_id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject_id">Materia:</label>
            <select name="subject_id" class="form-select" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $subject->id == $qualification->subject_id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="score">Calificación:</label>
            <input type="text" name="score" class="form-control" value="{{ $qualification->score }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        <a href="{{ route('qualifications.index') }}" class="btn btn-danger mt-3">Cancelar</a>
    </form>
</x-layouts.app>
