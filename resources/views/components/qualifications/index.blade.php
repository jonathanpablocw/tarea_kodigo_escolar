<x-layouts.app>
    <a href="{{ route('qualifications.create') }}" class="btn btn-success">REGISTRAR CALIFICACIÓN</a>
    <h3 class="mt-3 mb-3">Listado de Calificaciones</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Materia</th>
            <th>Calificación</th>
            <th>Acciones</th>
        </tr>
        @foreach ($qualifications as $qualification)
            <tr>
                <td>{{ $qualification->id }}</td>
                <td>{{ $qualification->student->first_name }} {{ $qualification->student->last_name }}</td>
                <td>{{ $qualification->subject->name }}</td>
                <td>{{ $qualification->score }}</td>
                <td>
                    <a href="{{ route('qualifications.show', $qualification->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('qualifications.edit', $qualification->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('qualifications.destroy', $qualification->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>

