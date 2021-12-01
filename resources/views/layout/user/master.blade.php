<!DOCTYPE html>
<html lang="en {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Sistem Pakar Kecantikan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('asset/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/asset/assets/vendors/css/vendor.bundle.base.css/')}}">

  <!-- Custom styles for this page -->
  <link href="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('asset/assets/css/style.css')}}">
  <link href="{{asset('asset/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">

  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('asset/assets/images/favicon.ico')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:asset/partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/user"><img src="{{asset('asset/assets/images/logo.svg')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="/user"><img src="{{asset('asset/assets/images/logo-mini.svg')}}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-login d-none d-lg-block">
            <a href="#" id="btn-logout" class="nav-link btn btn-gradient-danger text-white justify-content-center" style="width: 100px; height: 40px;">
              Log Out <i class="mdi mdi-logout"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:asset/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/user">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/diagnosa">
              <span class="menu-title">Diagnosa</span>
              <i class="mdi mdi-face menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/riwayat">
              <span class="menu-title">Riwayat Diagnosa</span>
              <i class="mdi mdi-tag-faces menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield ('content')
          @include('sweetalert::alert')
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Amelia Septi Aisyah | Universitas Pamulang 2021</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{asset('asset/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('asset/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('asset/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('asset/assets/js/misc.js')}}"></script>


  <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('asset/vendor/datatables-demo.js')}}"></script>
  <script src="{{asset('asset/sweetalert2/sweetalert2.min.js')}}"></script>

  <script>
    $(document).on('click', '#btn-logout', function(e) {
      var logout = document.getElementById('logout-form');
      e.preventDefault();

      Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda Akan Logout!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Logout!'
      }).then((result) => {
        if (result.isConfirmed) {
          logout.submit();
        }
      })
    });
  </script>

</body>

</html>