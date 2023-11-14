<x-layouts.app>
    <a href="{{ route('teachers.create') }}" class="btn btn-success">REGISTRAR PROFESOR</a>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>EDAD</th>
            <th>DIRECCIÓN</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->age }}</td>
                <td>{{ $teacher->address }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm"><i
                            class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                            Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>
