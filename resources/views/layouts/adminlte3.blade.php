<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('header','Main Content') | Integrated Barangay Records Management System</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('dist/dttbtn/buttons.dataTables.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    .req{
      color:red;
    }
    .hidden{
      display:none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
           @csrf
           <button href="#" class="dropdown-item nav-link"><i class="fa fa-sign-out-alt"></i> Logout</button>
       </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light ">Barangay Information</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
            <div class="image">
              <img src="/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image" style="width: 40px;height: 40px">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
                <div class="form-inline">
                    <a href="#" class="d-block text-sm">{{ ucfirst(Auth::user()->role) }} - &nbsp;</a> 
                    <a href="/dashboard/profile" class="d-block text-sm">View Profile</a>
                </div>
            </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">NAVIGATION</li>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @if(Request::is('dashboard')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview @if(Request::is('resident') || Request::is('household') || Request::is('household/create') || Request::is('resident/create')) menu-open @endif">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Residents
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #45505a">
              <li class="nav-item">
                <a href="/household" class="nav-link @if(Request::is('household') || Request::is('household/create')) active @endif
                ">
                  <i class="fa fa-home"></i>
                  <p>Manage Household</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resident" class="nav-link @if(Request::is('resident') || Request::is('resident/create')) active @endif">
                  <i class="fa fa-user-circle"></i>
                   <p>&nbsp;Manage Resident</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Clearances
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #45505a">
              <li class="nav-item">
                <a href="/household" class="nav-link @if(Request::is('household') || Request::is('household/create')) active @endif
                ">
                  <i class="fa fa-home"></i>
                  <p>Manage Household</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resident" class="nav-link @if(Request::is('resident') || Request::is('resident/create')) active @endif">
                  <i class="fa fa-user-circle"></i>
                   <p>&nbsp;Manage Resident</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Judicial Cases
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #45505a">
              <li class="nav-item">
                <a href="/household" class="nav-link @if(Request::is('household') || Request::is('household/create')) active @endif
                ">
                  <i class="fa fa-home"></i>
                  <p>Manage Household</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resident" class="nav-link @if(Request::is('resident') || Request::is('resident/create')) active @endif">
                  <i class="fa fa-user-circle"></i>
                   <p>&nbsp;Manage Resident</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Medical/Healthcare
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #45505a">
              <li class="nav-item">
                <a href="/household" class="nav-link @if(Request::is('household') || Request::is('household/create')) active @endif
                ">
                  <i class="fa fa-home"></i>
                  <p>Manage Household</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resident" class="nav-link @if(Request::is('resident') || Request::is('resident/create')) active @endif">
                  <i class="fa fa-user-circle"></i>
                   <p>&nbsp;Manage Resident</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Disaster Risk Reduction
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #45505a">
              <li class="nav-item">
                <a href="/household" class="nav-link @if(Request::is('household') || Request::is('household/create')) active @endif
                ">
                  <i class="fa fa-home"></i>
                  <p>Manage Household</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resident" class="nav-link @if(Request::is('resident') || Request::is('resident/create')) active @endif">
                  <i class="fa fa-user-circle"></i>
                   <p>&nbsp;Manage Resident</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/user" class="nav-link @if(Request::is('user')) active @endif">
              <i class="fa fa-file"></i>
               <p>&nbsp;Barangay Forms</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link @if(Request::is('user')) active @endif">
              <i class="fa fa-calendar"></i>
               <p>&nbsp;Events Calendar</p>
            </a>
          </li>

          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="/user" class="nav-link @if(Request::is('user')) active @endif">
              <i class="fa fa-users"></i>
               <p>&nbsp;Manage Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link @if(Request::is('user')) active @endif">
              <i class="fa fa-building"></i>
               <p>&nbsp;Barangay Profile</p>
            </a>
          </li>
        
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('header','Main Content')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('header','Main Content')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Made w/
          <i class="fa fa-heart" style="color:pink"></i>
      Laravel 6 Framework
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019-2020 <a href="#">IBRMS v1.0</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/dttbtn/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
@include('sweetalert::alert')
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script>
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
  $(function () {
    $('#dtt1').DataTable();
    $('#dtt2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
   $('#dtt3').DataTable({
      "dom": 'Bfrtip',
      "paging": true,
      "autoWidth": true,
      "columnDefs": [{
          "visible": true,
          "targets": -1
      }],
      buttons: ['excel','csv','pdf']
    });
  });

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
</body>
</html>
