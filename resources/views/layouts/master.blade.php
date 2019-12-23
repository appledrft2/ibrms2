<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="IBRMS - Integrated Barangay Records Management System">
    <meta name="author" content="anonymouse">
    <meta name="keyword" content="IBRMS">
    <title>@yield('title','IBRMS') - Integrated Barangay Records Management System</title>
    <!-- Icons-->
    <link rel="icon" href="coreui/img/ibrmslogo.PNG" type="image/x-icon" />
    <link href="{{asset('coreui/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('coreui/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('coreui/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('coreui/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('coreui/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('coreui/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{asset('coreui/img/ibrmslogo.PNG')}}" width="100" height="50" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{asset('coreui/img/brand/sygnet.svg')}}" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <!-- <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li> -->
      </ul>
      <ul class="nav navbar-nav ml-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('coreui/img/avatars/male.png')}}" alt="Ragie">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <form id="logout-form" style="margin:0px" action="{{ route('logout') }}" method="POST" >
            @csrf
            <button class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</button>
            </form>
          </div>
        </li>
      </ul>
      
     
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-title">NAVIGATION</li>
            <li class="nav-item">
              <a class="nav-link " href="/dashboard">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item nav-dropdown open">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-people"></i> Residents</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link @if($title=='Household') active @endif" href="/household" target="_top">
                    <i class="nav-icon icon-home"></i> Manage Household</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if($title=='Resident') active @endif" href="/resident" target="_top">
                    <i class="nav-icon icon-user"></i> Manage Resident</a>
                </li>
              </ul>
            </li>
            <li class="nav-title">SETTINGS</li>
            
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-folder"></i> Barangay Profile</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="login.html" target="_top">
                    <i class="nav-icon icon-eye"></i> View Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html" target="_top">
                    <i class="nav-icon icon-list"></i> Manage Purok</a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="register.html" target="_top">
                <i class="nav-icon icon-key"></i> Accounts</a>
            </li>
            
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">@yield('title','IBRMS')</li>
          <li class="breadcrumb-item active">Overview</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">

            <div class="btn-group" role="group" aria-label="Button group">
    
              <a class="btn" href="./">
                <i class="icon-clock"></i>&nbsp;{{date('l, M. d Y')}}</a>
             
            </div>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- Content -->
              @yield('content')
            <!-- Content -->
          </div>
        </div>
      </main>
    </div>
    <footer class="app-footer">
      <div>
        <a href="#">IBRMS</a>
        <span>&copy; 2019 All Rights Reserved.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="#">Laravel 6 Framework</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    @include('sweetalert::alert')
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
  </body>
</html>

<script type="text/javascript">
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
  $(document).ready( function () {
      $('#dtt1').DataTable();
  } );
  // btn for deleting data
   $(document).on('click', '.btn_delete', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

          if(result.value){
            $('#form'+id).submit();
          }

        });
   });
</script>
@yield('script')
