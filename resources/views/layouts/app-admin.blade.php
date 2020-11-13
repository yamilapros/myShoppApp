<!DOCTYPE html>
    <html lang="es">
    
    <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
      <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.png') }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      @yield('title', 'Dashboard')
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      
      <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="{{ asset('admin/demo/demo.css') }}" rel="stylesheet" />
      @yield('style')
    </head>
    
    <body class="">
      <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('admin/img/sidebar-1.jpg') }}">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    
            Tip 2: you can also add an image using data-image tag
        -->
          <div class="logo"><a href="{{ url('admin/products') }}" class="simple-text logo-normal">
            <img src="http://myshopapp.test/img/logo.png" alt="Logo">
            </a></div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/products') }}">
                  <i class="material-icons">dashboard</i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">
                  <i class="material-icons">person</i>
                  <p>Categorías</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Dashboard</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bienvenido, {{ Auth::user()->name }}! <i class="material-icons">person</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">
              @yield('content')
            </div>
          </div>
          <footer class="footer">
            <div class="container-fluid">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="https://www.creative-tim.com">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="https://creative-tim.com/presentation">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/license">
                      Licenses
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
              </div>
            </div>
          </footer>
        </div>
      </div>
      
      <!--   Core JS Files   -->
      <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
      <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
      <!-- Plugin for the momentJs  -->
      <script src="{{ asset('admin/js/plugins/moment.min.js') }}"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="{{ asset('admin/js/plugins/sweetalert2.js') }}"></script>
      <!-- Forms Validations Plugin -->
      <script src="{{ asset('admin/js/plugins/jquery.validate.min.js') }}"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{ asset('admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
      <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="{{ asset('admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="{{ asset('admin/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput.js') }}"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="{{ asset('admin/js/plugins/jasny-bootstrap.min.js') }}"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{ asset('admin/js/plugins/fullcalendar.min.js') }}"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="{{ asset('admin/js/plugins/jquery-jvectormap.js') }}"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('admin/js/plugins/nouislider.min.js') }}"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script>
      <!-- Library for adding dinamically elements -->
      <script src="{{ asset('admin/js/plugins/arrive.min.js') }}"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chartist JS -->
      <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script>
      <!--  Notifications Plugin    -->
      <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('admin/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
      <script src="{{ asset('admin/demo/demo.js') }}"></script>
      <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
    
            $sidebar_img_container = $sidebar.find('.sidebar-background');
    
            $full_page = $('.full-page');
    
            $sidebar_responsive = $('body > .navbar-collapse');
    
            window_width = $(window).width();
    
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
              if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
              }
    
            }
    
            
      </script>
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          md.initDashboardPageCharts();
    
        });
      </script>
    </body>
    
    </html>