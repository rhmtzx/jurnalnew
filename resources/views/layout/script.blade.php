<body>
	    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/materialize.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.init.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app-style-switcher.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/gaugeJS/dist/gauge.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/pages/dashboards/dashboard3.js')}}"></script>

    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>

<script>
  @if (Session::has('toast_success'))
  toastr.toast_success("{{ Session::get('toast_success') }}")
  @endif
</script>
<script>
  @if (Session::has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif
</script>
	
	    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/loader.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/charts/chartist/chartist.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/calendar/pignose/moment.latest.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/calendar/pignose/pignose.calendar.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/default-dashboard/default-custom.js') }}"></script>
    <script src="{{ asset('equation/designreset.com/preview-equation/default/assets/js/support-chat.js') }}"></script>

</body>