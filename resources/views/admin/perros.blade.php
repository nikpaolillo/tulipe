<div class="tab-pane fade show active" id="perros" role="tabpanel"
     aria-labelledby="perros-tab">
    @if (session('status'))
        <div style="margin-top:15px" class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <button data-toggle="modal" data-target="#modal-nuevo-perro"
            style="margin-top:15px;margin-bottom:15px" class="btn btn-success">Nuevo Perro
    </button>

    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($perros as $perro)
            <tr>
                <td><img style="width:50px;height:50px" src="{{ asset('storage/'.$perro->imagen) }}" alt=""></td>
                <td>{{ $perro->nombre }}</td>
                <td>{{ $perro->tipo }}</td>
                <td>{{ $perro->descripcion }}</td>
                <td><button data-id="{{ $perro->id }}" data-url="{{ route('borrar.perro') }}" class="btn btn-sm btn-danger borrar-perro"><i style="color:white" class="fas fa-times"></i></button></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('modals.nuevo-perro')
