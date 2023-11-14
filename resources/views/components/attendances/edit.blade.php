<x-layouts.app>
    <h4>Editar Asistencia</h4>
    <form method="POST" action="{{ route('attendances.update', $attendance->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="shift_id">Turno:</label>
            <select name="shift_id" class="form-select" required>
                <option value="">Seleccionar Turno</option>
                @foreach ($shifts as $shift)
                    <option value="{{ $shift->id }}" {{ $attendance->shift->id == $shift->id ? 'selected' : '' }}>
                        {{ $shift->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="grade_id">Grado:</label>
            <select name="grade_id" class="form-select" required>
                <option value="">Seleccionar Grado</option>
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}" {{ $attendance->grade->id == $grade->id ? 'selected' : '' }}>
                        {{ $grade->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="section_id">Sección:</label>
            <select name="section_id" class="form-select" required>
                <option value="">Seleccionar Sección</option>
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}" {{ $attendance->section->id == $section->id ? 'selected' : '' }}>
                        {{ $section->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="student_id">Estudiante:</label>
            <select name="student_id" class="form-select" required>
                <option value="">Seleccionar Estudiante</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $attendance->student->id == $student->id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">Fecha:</label>
            <input type="date" name="date" class="form-control" value="{{ $attendance->date }}" required>
        </div>

        <div class="form-group">
            <label for="status">Estado:</label>
            <select name="status" class="form-select" required>
                <option value="Asistio" {{ $attendance->status == 'Asistio' ? 'selected' : '' }}>Asistio</option>
                <option value="Falto" {{ $attendance->status == 'Falto' ? 'selected' : '' }}>Falto</option>
            </select>
        </div>

        <div class="form-group">
            <label for="observations">Observaciones:</label>
            <textarea name="observations" class="form-control">{{ $attendance->observations }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        <a href="{{ route('attendances.index') }}" class="btn btn-danger mt-3">Cancelar</a>
    </form>
</x-layouts.app>
