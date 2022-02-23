<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- BEGIN: VENDOR CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/vendors.min.css') }}">
<!-- END: VENDOR CSS-->
@yield('vendor-styles')
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/pages/dashboard.css') }}">
<!-- END: Page Level CSS-->
@yield('page-styles')
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/custom/custom.css') }}">
<!-- END: Custom CSS-->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

