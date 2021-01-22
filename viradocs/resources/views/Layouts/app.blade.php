@include('Layouts.header')
    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "dark", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            @include('Layouts.navbar')
            @include('Layouts.topbar')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                @yield('content')

                @include('Layouts.footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        @yield('customJS')
    </body>
</html>
