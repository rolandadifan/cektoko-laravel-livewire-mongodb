@include('includes.header')
<div class="wrapper">

    <!-- navbar -->
    @include('includes.navbar')
    <!-- endnavbar -->

    <!-- Left side column. contains the logo and sidebar -->
    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- footer -->
    @include('includes.footer')
    <!-- endfooter -->