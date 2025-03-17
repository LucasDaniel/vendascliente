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

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <label for="valor">Valor</label>

                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Criar Venda</button>
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
                                            <th style="width: 40%;">Cliente</th>
                                            <th style="width: 40%;">Produto</th>
                                            <th style="width: 10%;">Quantidade</th>
                                            <th style="width: 10%;">Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($vendas as $id => $venda) { ?>
                                        <tr>
                                            <td><?= $venda['cliente'] ?></td>
                                            <td><?= $venda['produto'] ?></td>
                                            <td><?= $venda['quantidade'] ?></td>
                                            <td><?= $venda['valor_total'] ?></td>
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
        <script src="{{ asset ("/js/viewVenda.js") }}"></script>
        @endsection
