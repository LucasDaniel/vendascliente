@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Homepage')

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
                            <form id="quickForm">
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Number 1',
                                    'id_input_text' => 'InputAboutNum1',
                                    'arg_value' => $args->about_num_1 ? $args->about_num_1 : '' ])
                                </div>
                                <hr />
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveIndexPage()">Criar Cliente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formIndexPage.js") }}"></script>
        <!-- /.content -->
        @endsection
