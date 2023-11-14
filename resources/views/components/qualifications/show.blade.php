<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles de la Calificación</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $qualification->id }}</td>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <td>{{ $qualification->student->first_name }} {{ $qualification->student->last_name }}</td>
                </tr>
                <tr>
                    <th>Materia</th>
                    <td>{{ $qualification->subject->name }}</td>
                </tr>
                <tr>
                    <th>Calificación</th>
                    <td>{{ $qualification->score }}</td>
                </tr>
            </table>
            <a href="{{ route('qualifications.index') }}" class="btn btn-primary">Volver a la lista de calificaciones</a>
        </div>
    </div>
</x-layouts.app>
