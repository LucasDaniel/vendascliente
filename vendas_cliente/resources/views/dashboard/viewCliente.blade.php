@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Cliente')

        @section('conteudo')
        <!-- Colocado esse style somente por enquanto, mudar depois. -->
        <style>
            .card-body {
                padding-bottom: 0em !important;
                padding-top: 0.5em !important;
            }

            .first-card-body {
                padding-top: 1.5em !important;
            }

            .last-card-body {
                padding-bottom: 1em !important;
            }

        </style>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form href="/cliente" method="POST" target="_self" id="quickForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <label for="nome">Nome</label>
                                            <input type="text" name="nome" class="form-control" id="nome" value="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Criar Cliente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 80%;">Nome</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($clientes as $id => $cliente) { ?>
                                        <tr>
                                            <td><?= $cliente['nome'] ?></td>
                                            <td></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset ("/js/viewCliente.js") }}"></script>
        <!-- /.content -->
        @endsection
