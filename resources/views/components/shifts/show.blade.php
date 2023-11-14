<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles del Turno</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $shift->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $shift->name }}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $shift->description }}</td>
                </tr>
            </table>
            <a href="{{ route('shifts.index') }}" class="btn btn-primary">Volver a la lista de turnos</a>
        </div>
    </div>
</x-layouts.app>
