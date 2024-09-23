<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - GunturSatya Member</title>

    @yield('cssthis')
    @include('member.layouts.head')
</head>

<body>
    <script src="{{ asset('assets/member/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    @include('member.layouts.headmenu')
                </div>
                <div class="sidebar-menu">
                    @include('member.layouts.sidebar')
                </div>
            </div>
        </div>
        <div id="main" class="layout-navbar navbar-fixed">
            @include('member.layouts.header')

            <div id="main-content">
                @yield('konten')
            </div>

            @include('member.layouts.footer')
        </div>
    </div>
    @yield('modalin')

    @include('member.layouts.skrip')
    @yield('skrip')
</body>

</html>
