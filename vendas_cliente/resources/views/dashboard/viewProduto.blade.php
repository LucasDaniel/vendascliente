@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Produto')

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
                            <form href="/produto" method="POST" target="_self" id="quickForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <label for="nome">Nome</label>
                                            <input id="nome" type="text" name="nome" class="form-control" id="nome" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <label for="valor">Valor</label>
                                            <input id="valor" type="number" name="valor" class="form-control" id="valor" value="" step='0.01' min='0.01'>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="criarProduto()">Criar Produto</button>
                                    <button id="btSubmit" type="submit" class="btn btn-primary" style="display:none">Criar Produto</button>
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
                                            <th style="width: 70%;">Nome</th>
                                            <th style="width: 30%;">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($produtos as $id => $produto) { ?>
                                        <tr>
                                            <td><?= $produto['nome'] ?></td>
                                            <td>R$ <?= $produto['valor'] ?></td>
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
        <script src="{{ asset ("/js/viewProduto.js") }}"></script>
        @endsection
