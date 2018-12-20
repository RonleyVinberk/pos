<!-- jQuery -->
<script src="{{asset('gentelellaassets/vendors/jquery/dist/jquery.min.js')}}"></script>
        
<!-- Bootstrap -->
<script src="{{asset('gentelellaassets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('gentelellaassets/vendors/fastclick/lib/fastclick.js')}}"></script>

<!-- NProgress -->
<script src="{{asset('gentelellaassets/vendors/nprogress/nprogress.js')}}"></script>

<!-- Chart.js -->
<script src="{{asset('gentelellaassets/vendors/Chart.js/dist/Chart.min.js')}}"></script>

<!-- gauge.js -->
<script src="{{asset('gentelellaassets/vendors/gauge.js/dist/gauge.min.js')}}"></script>

<!-- bootstrap-progressbar -->
<script src="{{asset('gentelellaassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('gentelellaassets/vendors/iCheck/icheck.min.js')}}"></script>

<!-- Skycons -->
<script src="{{asset('gentelellaassets/vendors/skycons/skycons.js')}}"></script>

<!-- Flot -->
<script src="{{asset('gentelellaassets/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/Flot/jquery.flot.resize.js')}}"></script>

<!-- Flot plugins -->
<script src="{{asset('gentelellaassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/flot.curvedlines/curvedLines.js')}}"></script>

<!-- DateJS -->
<script src="{{asset('gentelellaassets/vendors/DateJS/build/date.js')}}"></script>

<!-- JQVMap -->
<script src="{{asset('gentelellaassets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{asset('gentelellaassets/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('gentelellaassets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('gentelellaassets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('gentelellaassets/builds/js/custom.min.js')}}"></script>
<script>
    $('#datatable-stuffs').dataTable( {
        "order": [],
        "columnDefs": [{
            "targets"  : [0, 4],
            "orderable": false,
        }]
    });
    $('#datatable-types_stuff').dataTable({
        "order": [],
        "columnDefs": [{
            "targets"  : [0, 3],
            "orderable": false,
        }]
    });

    $('#datatable-suppliers').dataTable({
        "order": [],
        "columnDefs": [{
            "targets"  : [0, 1, 3],
            "orderable": false,
        }]
    });

    $('#datatable-selling').dataTable({
        "order": [],
        "columnDefs": [{
            "targets"  : [0, 1, 3],
            "orderable": false,
        }]
    });

    $('#datatable-provinces').dataTable({
        "order": [],
        "pageLength": 5,
        "columnDefs": [{
            "targets"  : [0, 1, 3],
            "orderable": false,
        }]
    });

    $('#datatable-countries').dataTable({
        "order": [],
        "pageLength": 5,
        "columnDefs": [{
            "targets"  : [0, 1, 3],
            "orderable": false,
        }]
    });
</script>