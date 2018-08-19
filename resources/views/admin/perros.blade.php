<div class="tab-pane fade show active" id="perros" role="tabpanel"
     aria-labelledby="perros-tab">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <button data-toggle="modal" data-target="#modal-nuevo-perro"
            style="margin-top:15px;margin-bottom:15px" class="btn btn-success">Nuevo Perro
    </button>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($perros as $perro)
            <tr>
                <td>{{ $perro->nombre }}</td>
                <td>{{ $perro->tipo }}</td>
                <td>{{ $perro->descripcion }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('modals.nuevo-perro')
