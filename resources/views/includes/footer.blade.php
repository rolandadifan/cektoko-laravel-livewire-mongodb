 <footer class="main-footer">
     <div class="pull-right hidden-xs">
         <b>Version</b> 2.4.18
     </div>
     <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
     reserved.
 </footer>

 <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button);
 </script>
 <!-- Bootstrap 3.3.7 -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <!-- Morris.js charts -->
 <script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
 <script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
 <!-- Sparkline -->
 <script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
 <!-- jvectormap -->
 <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
 <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
 <!-- daterangepicker -->
 <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
 <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 <!-- datepicker -->
 <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
 <!-- Bootstrap WYSIHTML5 -->
 <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
 <!-- Slimscroll -->
 <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
 <!-- FastClick -->
 <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
 <!-- AdminLTE App -->
 <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{asset('dist/js/demo.js')}}"></script>
 <!-- main js -->
 <script src="{{asset('js/main.js')}}"></script>
 <!-- jQuery -->
 <!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script> -->
 <!-- DataTables -->
 <!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->
 @livewireScripts
 <!-- <script>
     window.livewire.on('ProductStored', () => {
         $('exampleModal').modal('hide');
     })
 </script> -->
 </body>

 </html>