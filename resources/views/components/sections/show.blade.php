<x-layouts.app>
    <div class="row">
        <div class="col-6">
            <h4>Detalles de la Sección</h4>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $section->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $section->name }}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $section->description }}</td>
                </tr>
            </table>
            <a href="{{ route('sections.index') }}" class="btn btn-primary">Volver a la lista de secciones</a>
        </div>
    </div>
</x-layouts.app>
