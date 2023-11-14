<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles de la Materia</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $subject->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $subject->name }}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $subject->description }}</td>
                </tr>
            </table>
            <a href="{{ route('subject.index') }}" class="btn btn-primary">Volver a la lista de turnos</a>
        </div>
    </div>
</x-layouts.app>
