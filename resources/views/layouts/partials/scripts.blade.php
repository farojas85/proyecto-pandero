<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="app-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<script src="app-assets/js/vendor-scripts.js" id="vendor-scripts"></script>
{{-- <script src="app-assets/vendors/chartjs/chart.min.js"></script> --}}
<!-- BEGIN PAGE VENDOR JS-->
@yield('vendor-scripts')

<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="app-assets/js/plugins.min.js"></script>
<script src="app-assets/js/search.min.js"></script>
<script src="app-assets/js/custom/custom-script.min.js"></script>
<script src="app-assets/js/scripts/customizer.min.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="app-assets/js/page-scripts.js" id="page-scripts"></script>
{{-- <script src="app-assets/js/scripts/dashboard-modern.js"></script> --}}
{{-- <script src="app-assets/js/scripts/dashboard-ecommerce.min.js"></script> --}}
<!-- END PAGE LEVEL JS-->
@yield('page-scripts')


