<div class="tab-pane fade" id="cachorros" role="tabpanel"
     aria-labelledby="cachorros-tab">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <button data-toggle="modal" data-target="#modal-nuevo-cachorro"
            style="margin-top:15px;margin-bottom:15px" class="btn btn-success">Nuevo Cachorro
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
        @foreach($cachorros as $cachorro)
               <tr>
                   <td>{{ $cachorro->nombre }}</td>
                   <td>{{ $cachorro->tipo }}</td>
                   <td>{{ $cachorro->descripcion }}</td>
               </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('modals.nuevo-cachorro')
