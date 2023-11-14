<x-layouts.app>
    <a href="{{ route('attendances.create') }}" class="btn btn-success">REGISTRAR ASISTENCIA</a>
    <h3 class="mt-3 mb-3">Listado de Asistencias</h3>
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Turno</th>
            <th>Grado</th>
            <th>Sección</th>
            <th>Estudiante</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Acciones</th>
        </tr>
        @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->shift->name }}</td>
                <td>{{ $attendance->grade->name }}</td>
                <td>{{ $attendance->section->name }}</td>
                <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                <td>{{ date('d/m/Y', strtotime($attendance->date)) }}</td>
                <td>
                    @if ($attendance->status == 'Falto')
                        <span class="badge rounded-pill text-bg-danger">{{ $attendance->status }}</span>
                    @else
                        <span class="badge rounded-pill text-bg-success">{{ $attendance->status }}</span>
                    @endif
                </td>
                <td>{{ $attendance->observations }}</td>
                <td>
                    <a href="{{ route('attendances.show', $attendance->id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-eye"></i> Ver</a>
                    <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-warning btn-sm"><i
                            class="fas fa-edit"></i> Editar</a>
                    <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST"
                        style="display: inline;">
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
