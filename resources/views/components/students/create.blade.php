<x-layouts.app>
    <div class="row">
        <div class="col-md-6">
            <h4>REGISTRAR NUEVO ESTUDIANTE</h4>
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="first_name">Nombre:</label>
                        <input type="text" name="first_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="last_name">Apellido:</label>
                        <input type="text" name="last_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="age">Edad:</label>
                        <input type="number" name="age" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" name="email" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="date_of_birth">Fecha de Nacimiento:</label>
                        <input type="date" name="date_of_birth" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="address">Dirección:</label>
                        <input type="text" name="address" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="shift">Turno:</label>
                        <select name="shift" class="form-select" >
                            <option value="">Seleccionar Opcion</option>
                            @foreach ($shifts as $shift)
                                <option value="{{ $shift->id }}">{{ $shift->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="grade">Grado:</label>
                        <select name="grade" class="form-select" required>
                            <option value="">Seleccionar Opcion</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="section">Seccion:</label>
                        <select name="section" class="form-select" required>
                            <option value="">Seleccionar Opcion</option>
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <button type="submit" class="btn btn-primary">Guardar Estudiante</button>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('students.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
