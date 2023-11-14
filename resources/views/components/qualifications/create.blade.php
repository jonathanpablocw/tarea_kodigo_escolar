<x-layouts.app>
    <div class="row">
        <div class="col-md-6">
            <h4>REGISTRAR CALIFICACIÓN</h4>
            <form method="POST" action="{{ route('qualifications.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="student_id">Estudiante:</label>
                        <select name="student_id" class="form-select" required>
                            <option value="">Seleccionar Estudiante</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="subject_id">Materia:</label>
                        <select name="subject_id" class="form-select" required>
                            <option value="">Seleccionar Materia</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="score">Nota:</label>
                        <input type="text" name="score" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <button type="submit" class="btn btn-primary">Guardar Calificación</button>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('qualifications.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
