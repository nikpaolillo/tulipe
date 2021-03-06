<div class="modal fade" id="modal-nuevo-cachorro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <form action="{{ route('nuevo.cachorro') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Cachorro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input required class="form-control" type="text" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="col-md-6">
                            <input required class="form-control" type="text" placeholder="Tipo" name="tipo">
                        </div>
                    </div>
                    <div style="margin-top:15px" class="row">
                        <div class="col-md-12">
                            <textarea required class="form-control" placeholder="Descripcion" name="descripcion"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:15px" class="row">
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="imagen">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
