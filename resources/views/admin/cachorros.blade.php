<div class="tab-pane fade" id="cachorros" role="tabpanel"
     aria-labelledby="cachorros-tab">
    @if (session('status'))
        <div style="margin-top:15px" class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <button data-toggle="modal" data-target="#modal-nuevo-cachorro"
            style="margin-top:15px;margin-bottom:15px" class="btn btn-success">Nuevo Cachorro
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
        @foreach($cachorros as $cachorro)
               <tr>
                   <td><img style="width:50px;height:50px" src="{{ asset('storage/'.$cachorro->imagen) }}" alt=""></td>
                   <td>{{ $cachorro->nombre }}</td>
                   <td>{{ $cachorro->tipo }}</td>
                   <td>{{ $cachorro->descripcion }}</td>
                   <td><button data-id="{{ $cachorro->id }}" data-url="{{ route('borrar.cachorro') }}" class="btn btn-sm btn-danger borrar-cachorro"><i style="color:white" class="fas fa-times"></i></button></td>
               </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('modals.nuevo-cachorro')
