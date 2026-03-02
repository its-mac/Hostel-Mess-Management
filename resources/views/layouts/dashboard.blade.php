<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    @include('partials.head')
    <!-- [Vite Development Scripts] -->
    <!-- Development script removed for production -->

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="../dashboard/index.html" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="images/logo-white.svg" class="img-fluid logo-lg" alt="logo" />
                </a>
            </div>
            <div class="navbar-content">
                @yield('sidebar')
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    @include('partials.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('partials.footer')

    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>

    <!-- Vector maps -->
    <script src="{{ asset('assets/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/world.js') }}"></script>

    <!-- Enhanced Dashboard Widgets -->
    <script src="{{ asset('assets/js/widgets/world-low.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/device-chart.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/happy-sad-ball.js') }}"></script>

    <!-- Custom Enhanced Dashboard JS -->
    <script>
        if (document.querySelector('#real-time-chart')) {
            new ApexCharts(document.querySelector('#real-time-chart'), realTimeOptions).render();
        }
    </script>
    <!-- [Page Specific JS] end -->

    <!-- Required JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/multi-lang.js') }}"></script>

    @stack('scripts')
</body>
<!-- [Body] end -->

</html>
