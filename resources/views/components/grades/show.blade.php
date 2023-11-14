<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles del Grado</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $grade->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $grade->name }}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $grade->description }}</td>
                </tr>
            </table>
            <a href="{{ route('grades.index') }}" class="btn btn-primary">Volver a la lista de grados</a>
        </div>
    </div>
</x-layouts.app>
