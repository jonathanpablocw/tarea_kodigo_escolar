<x-layouts.app>
    <h4>Detalles del Profesor</h4>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $teacher->id }}</td>
        </tr>
        <tr>
            <th>Nombres</th>
            <td>{{ $teacher->first_name }}</td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td>{{ $teacher->last_name }}</td>
        </tr>
        <tr>
            <th>Edad</th>
            <td>{{ $teacher->age }}</td>
        </tr>
        <tr>
            <th>Correo Electrónico</th>
            <td>{{ $teacher->email }}</td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td>{{ $teacher->date_of_birth }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $teacher->address }}</td>
        </tr>
    </table>
    <a href="{{ route('teachers.index') }}" class="btn btn-primary">Volver a la lista de profesores</a>
</x-layouts.app>
