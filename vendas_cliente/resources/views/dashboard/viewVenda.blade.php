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
                            <form href="/venda" method="POST" target="_self" id="quickForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <label for="nome">Cliente</label>
                                            <select id="cliente" name="cliente_id" class="select-cliente" data-placeholder="Selecione um cliente" style="width: 100%;">
                                                <?php foreach($clientes as $id => $cliente) { ?>
                                                <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <label for="valor">Produto</label>
                                            <select id="produto" name="produto_id" class="select-produto" data-placeholder="Selecione um produto" style="width: 100%;" onchange="mudouProduto()">
                                                <?php foreach($produtos as $id => $produto) { ?>
                                                <option value="<?= $produto['id'] ?>" title="<?= $produto['valor'] ?>"><?= $produto['nome'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" class="form-control" id="valor_produto" value="" step='0.01' min='0.01' disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <label for="valor">Quantidade</label>
                                            <input type="number" name="quantidade" class="form-control" id="quantidade" value="" step='1' min='1' onchange="mudouQuantidade()">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <label for="valor">Valor</label>
                                            <input type="number" name="valor" class="form-control" id="valor" value="" step='0.01' min='0.01' disabled>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="criarVenda()">Criar Venda</button>
                                    <button id="btSubmit" type="submit" class="btn btn-primary" style="display:none">Criar Venda</button>
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
                                            <th style="width: 15%;">Data Hora</th>
                                            <th style="width: 30%;">Cliente</th>
                                            <th style="width: 25%;">Produto</th>
                                            <th style="width: 15%;">Quantidade</th>
                                            <th style="width: 15%;">Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($vendas as $id => $venda) { ?>
                                        <tr>
                                            <td><?= $venda->data_hora ?></td>
                                            <td><?= $venda->cliente ?></td>
                                            <td><?= $venda->produto ?></td>
                                            <td><?= $venda->quantidade ?></td>
                                            <td>R$ <?= $venda->valor_total ?></td>
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
