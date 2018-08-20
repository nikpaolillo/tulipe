@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de administracion</div>

                    <div class="card-body">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="perros-tab" href="#perros"
                                   role="tab" aria-controls="perros" aria-selected="true">Perros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cachorros-tab" href="#cachorros" role="tab"
                                   aria-controls="cachorros" aria-selected="false">Cachorros</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            @include('admin.perros')

                            @include('admin.cachorros')

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

            $('.nav-tabs a').click(function () {
                $(this).tab('show');
            })

            if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
            return $('a[data-toggle="tab"]').on('shown', function (e) {
                return location.hash = $(e.target).attr('href').substr(1);
            });
        });
    </script>

    <script>

        var Callbacks = {
            borrarPerro: function (id, url) {
                $.ajax({
                    url: url,
                    data: {
                        'id' : id
                    },
                    method: 'post',
                    success: function (data) {
                        location.reload();
                    },
                    error: function (data) {

                    }
                });
            },

            borrarCachorro: function (id, url) {
                $.ajax({
                    url: url,
                    data: {
                        'id' : id
                    },
                    method: 'post',
                    success: function (data) {
                        location.reload();
                    },
                    error: function (data) {

                    }
                });
            }
        }

        var Confirmaciones = {
            borrarPerro: function (id, url) {
                $.confirm({
                    title: '¿Esta seguro de borrar el perro?',
                    content: '',
                    buttons: {
                        confirmar: function () {
                            Callbacks.borrarPerro(id, url);
                        },
                        cancelar: function () {

                        },
                    }
                });
            },

            borrarCachorro: function (id, url) {
                $.confirm({
                    title: '¿Esta seguro de borrar el cachorro?',
                    content: '',
                    buttons: {
                        confirmar: function () {
                            Callbacks.borrarCachorro(id, url);
                        },
                        cancelar: function () {

                        },
                    }
                });
            }
        }


        $('body')
            .on('click', '.borrar-cachorro', function () {
                var id = $(".borrar-cachorro").data('id');
                var url = $(".borrar-cachorro").data('url');
                Confirmaciones.borrarCachorro(id, url);
            })
            .on('click', '.borrar-perro', function () {
                var id = $(".borrar-perro").data('id');
                var url = $(".borrar-perro").data('url');
                Confirmaciones.borrarPerro(id, url);
            });
    </script>
@endsection
