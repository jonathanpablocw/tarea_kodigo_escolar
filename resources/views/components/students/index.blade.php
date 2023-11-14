<x-layouts.app>
    <a href="{{ route('students.create') }}" class="btn btn-success">REGISTRAR ESTUDIANTES</a>
    <h3 class="mt-3 mb-3">Lista de Estudiantes</h3>
    <table class="table table-bordered mt-2">
        <tr>
        <th>ID</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>EDAD</th>
        <th>TURNO</th>
        <th>GRADO</th>
        <th>SECCION</th>
        <th>ACCIONES</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->shift->name }}</td>
                <td>{{ $student->grade->name }}</td>
                <td>{{ $student->section->name }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm"><i
                            class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                            Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>
