<!-- Core JS files -->
<script src="{{ asset("vendor/toaha/admin/assets/plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/sparklines/sparkline.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/daterangepicker/daterangepicker.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/summernote/summernote-bs4.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/dist/js/adminlte.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/dist/js/demo.js") }}"></script>
<script src="{{ asset("vendor/toaha/admin/assets/dist/js/pages/dashboard.js") }}"></script>

<!-- /core JS files -->
@stack('js')