@auth
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Sistema de Control de Panderos">
    <meta name="keywords" content="materialize, admin template, dashboard template, sistema pandero">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="FarbeSofts">
    <title>@yield('title')Pandero</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/favicon/favicon-32x32.png') }}">
    @include('layouts.partials.estilos')
</head>
<!-- END: Head-->

<body
class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <div id="app">
        <!-- BEGIN: Header-->
        @include('layouts.partials.navbar')
        <!-- END: Header-->

        <!-- BEGIN: SideNav-->
        @include('layouts.partials.sidenav')
        <!-- END: SideNav-->

        <!-- BEGIN: Page Main-->
        <div id="main">
            <div class="row">
                <div class="col s12">
                    <div class="container">
                        <router-view></router-view>
                        <!-- START RIGHT SIDEBAR NAV -->
                        @include('layouts.partials.right-sidebar')
                        <!-- END RIGHT SIDEBAR NAV -->
                    </div>
                    <div class="content-overlay"></div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->

        <!-- Theme Customizer -->
        @include('layouts.partials.theme-customer')
        <!--/ Theme Customizer -->

        {{-- <a href="https://1.envato.market/materialize_admin" target="_blank"
            class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
            data-position="left" data-tooltip="Buy Now!"><i class="material-icons">add_shopping_cart</i></a> --}}

        <!-- BEGIN: Footer-->
        @include('layouts.partials.footer')

    </div>
    @include('layouts.partials.scripts')
</body>
</html>
@else
<script>window.location.href="/"</script>
@endauth
