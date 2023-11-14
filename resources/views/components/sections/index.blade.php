<x-layouts.app>
    <a href="{{ route('sections.create') }}" class="btn btn-success">REGISTRAR SECCIÓN</a>
    <h3 class="mt-3 mb-3">Listado de Secciones</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        @foreach ($sections as $section)
            <tr>
                <td>{{ $section->id }}</td>
                <td>{{ $section->name }}</td>
                <td>{{ $section->description }}</td>
                <td>
                    <a href="{{ route('sections.show', $section->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>
