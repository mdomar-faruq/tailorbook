<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('my_assets')}}/assets/"
  data-template="vertical-menu-template-free"
>
{{-- head --}}
@include('include.tailor_head')

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      
{{-- left-sidver --}}
@include('include.left_sidebar')


<!-- Layout container -->
<div class="layout-page">
  
  {{-- Top menu --}}
  @include('include.top_menu')



{{-- our body --}}
<div class="content-wrapper">
@yield('contain')
</div>



{{-- Fotter --}}
@include('include.footer')

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('my_assets')}}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('my_assets')}}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('my_assets')}}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('my_assets')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset('my_assets')}}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('my_assets')}}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{asset('my_assets')}}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{asset('my_assets')}}/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @yield('script')
  </body>
</html>
