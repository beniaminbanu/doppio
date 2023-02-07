@include('layouts.web.stacks.scripts')
@include('layouts.web.stacks.styles')
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.web.includes.head')
</head>
<body>
    @include('layouts.svg')

    <!-- website container -->
    <div class="wrapper">
        <!-- header content -->
        <header>
            @include('layouts.web.includes.header')
        </header>
    @include('layouts.web.includes.buttonUp')


    <!-- main content -->
        {{-- <div id="main">
            <div class="main-container default">
                <div class="main-inner">
                    <div class="main-content">
                        @yield('breadcrumb')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="main">
            @yield('content')
        </div>

        <!-- footer content -->
        <footer>
            @include('layouts.web.includes.footer')
        </footer>
    </div>

    <!-- modals -->
    {{-- <div id="modals">
        @stack('modals')
    </div> --}}

    <!-- scripts -->
    <div id="scripts">
        @stack('global-scripts')
        @stack('scripts')
    </div>

    <!-- alerts -->
    {{-- <div id="alerts">
        @include('partials.alerts.sweet-alert')
    </div>  --}}
</body>
</html>
