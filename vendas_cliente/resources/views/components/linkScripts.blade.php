<!-- jQuery -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js") }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/sweetalert2/sweetalert2.min.js") }}"></script>
<!-- Select2 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/select2/js/select2.full.min.js") }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/jszip/jszip.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/pdfmake/pdfmake.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/pdfmake/vfs_fonts.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>

<script src="{{ asset ("/js/jquery.js") }}"></script>

<script src="{{ asset ("/js/leftMenu.js") }}"></script>

<script>
    $(function() {

        $('.select-cliente').select2();
        $('.select-produto').select2();

        $('#produto').val(1).trigger('change.select2');

        $("#example1").DataTable({
            "language": {
                "sInfo": "Mostrando _START_ à _END_ de _TOTAL_ entradas"
                , "sSearch": "<i class='nav-icon fas fa-search'></i>"
                , "oPaginate": {
                    "sFirst": "Primeiro"
                    , "sLast": "Ultimo"
                    , "sNext": "Proximo"
                    , "sPrevious": "Anterior"
                }
            }
            , "responsive": true
            , "lengthChange": false
            , "autoWidth": false
            , "buttons": ["csv", "excel"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

</script>

</body>
</html>
