<x-layouts.app>
    <div class="row">
        <div class="col-md-6">
            <h4>REGISTRAR NUEVA ASISTENCIA</h4>
            <form method="POST" action="{{ route('attendances.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="shift_id">Turno:</label>
                        <select name="shift_id" class="form-select" required>
                            <option value="">Seleccionar Turno</option>
                            @foreach ($shifts as $shift)
                                <option value="{{ $shift->id }}">{{ $shift->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="grade_id">Grado:</label>
                        <select name="grade_id" class="form-select" required>
                            <option value="">Seleccionar Grado</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="section_id">Sección:</label>
                        <select name="section_id" class="form-select" required>
                            <option value="">Seleccionar Sección</option>
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>

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
                        <label for="date">Fecha:</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="status">Estado:</label>
                        <select name="status" class="form-select" required>
                            <option value="">Seleccionar Estado</option>
                            <option value="Asistio">Asistió</option>
                            <option value="Falto">Faltó</option>
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="observations">Observaciones:</label>
                        <textarea name="observations" class="form-control"></textarea>
                    </div>

                    <div class="col-6 mb-3">
                        <button type="submit" class="btn btn-primary">Guardar Asistencia</button>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ route('attendances.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
