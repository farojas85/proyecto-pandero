<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('app-assets/js/vendors.min.js') }}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
{{-- <script src="{{ asset('app-assets/vendors/chartjs/chart.min.js') }}"></script> --}}
@yield('vendor-scripts')

<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset('app-assets/js/plugins.js') }}"></script>
<script src="{{ asset('app-assets/js/search.js') }}"></script>
<script src="{{ asset('app-assets/js/custom/custom-script.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/dashboard-ecommerce.js') }}"></script>
<!-- END PAGE LEVEL JS-->
@yield('page-scripts')
