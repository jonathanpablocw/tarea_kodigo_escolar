<x-layouts.app>
    <a href="{{ route('shifts.create') }}" class="btn btn-success">REGISTRAR TURNO</a>
    <h3 class="mt-3 mb-3">Listado de Turnos</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($shifts as $shift)
            <tr>
                <td>{{ $shift->id }}</td>
                <td>{{ $shift->name }}</td>
                <td>{{ $shift->description }}</td>
                <td>
                    <a href="{{ route('shifts.show', $shift->id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('shifts.edit', $shift->id) }}" class="btn btn-warning btn-sm"><i
                            class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST" style="display: inline;">
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
