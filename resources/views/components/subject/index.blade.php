<x-layouts.app>
    <a href="{{ route('subject.create') }}" class="btn btn-success">REGISTRAR MATERIA</a>
    <h3 class="mt-3 mb-3">Listado de Materias</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->description }}</td>
                <td>
                    <a href="{{ route('subject.show', $subject->id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-warning btn-sm"><i
                            class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" style="display: inline;">
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
