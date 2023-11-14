<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles de la Asistencia</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $attendance->id }}</td>
                </tr>
                <tr>
                    <th>Turno</th>
                    <td>{{ $attendance->shift->name }}</td>
                </tr>
                <tr>
                    <th>Grado</th>
                    <td>{{ $attendance->grade->name }}</td>
                </tr>
                <tr>
                    <th>Sección</th>
                    <td>{{ $attendance->section->name }}</td>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ date('d/m/Y', strtotime($attendance->date)) }}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        @if ($attendance->status == 'Falto')
                            <span class="badge rounded-pill text-bg-danger">{{ $attendance->status }}</span>
                        @else
                            <span class="badge rounded-pill text-bg-success">{{ $attendance->status }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Observaciones</th>
                    <td>{{ $attendance->observations }}</td>
                </tr>
            </table>
            <a href="{{ route('attendances.index') }}" class="btn btn-primary">Volver a la lista de asistencias</a>
        </div>
    </div>
</x-layouts.app>
