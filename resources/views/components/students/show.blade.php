<x-layouts.app>
<div class="row">
    <div class="col-6">
        <h4>Detalles del Estudiante</h4>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $student->id }}</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>{{ $student->first_name }}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{ $student->last_name }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{ $student->age }}</td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <td>{{ $student->email }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ $student->date_of_birth }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $student->address }}</td>
            </tr>
            <tr>
                <th>Turno</th>
                <td>{{ $student->shift->name }}</td>
            </tr>
            <tr>
                <th>Grado</th>
                <td>{{ $student->grade->name }}</td>
            </tr>
            <tr>
                <th>Sección</th>
                <td>{{ $student->section->name }}</td>
            </tr>
        </table>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Volver a la lista de estudiantes</a>
    </div>
</div>
</x-layouts.app>
