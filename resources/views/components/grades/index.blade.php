<x-layouts.app>
    <a href="{{ route('grades.create') }}" class="btn btn-success">REGISTRAR GRADO</a>
    <h3 class="mt-3 mb-3">Listado de Grados</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        @foreach ($grades as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->name }}</td>
                <td>{{ $grade->description }}</td>
                <td>
                    <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-info btn-sm"><i
                        class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning btn-sm"><i
                        class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>
