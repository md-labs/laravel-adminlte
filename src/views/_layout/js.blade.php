<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script type="text/javascript">
$.widget.bridge('uibutton', $.ui.button);
$(function() {
    $('.dropdown-toggle').dropdown();
});
</script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/almasaeed2010/adminlte/dist/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/gionnivaleriana/adminlte/js/bootbox.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/gionnivaleriana/adminlte/js/ekko-lightbox.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/gionnivaleriana/adminlte/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/gionnivaleriana/adminlte/js/bootstrap-multiselect.min.js') }}" type="text/javascript"></script>
<script src="{{ Admin::instance()->router->routeToLang(App::getLocale()) }}" type="text/javascript"></script>
<script src="{{ URL::asset('packages/gionnivaleriana/adminlte/js/admin.js') }}" type="text/javascript"></script>
