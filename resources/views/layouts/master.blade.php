<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('header','IBRMS') - Integrated Barangay Records Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/dist/css/skins/skin-red-light.min.css')}}">
    <!-- Pace style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/plugins/pace/pace.min.css')}}">
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
      <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    @yield('styles')
    <style type="text/css">
      .hidden{
        display:none;
      }
      .req{
        color:red;
      }

      .swal2-popup {
        font-size: 1.6rem !important;
      }

      .notactive{
        color:#848484 !important;
      }
    </style>
    
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style type="text/css">
        .navs-items{
            
            border-bottom:1px solid #ccd0d8;
        }
    </style>
</head>
<body class="hold-transition skin-red-light sidebar-mini" >
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" >

    <!-- Logo -->
    <a href="#" class="logo" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IB</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IBRMS</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top"role="navigation" style="background-color: #37383c">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">  
          <!-- User Account Menu -->
          <li class="dropdown user user-menu" >
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             <!--  <img src="dist/img/user1-128x128.jpg" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> Admin</span>
            </a>
            <ul class="dropdown-menu" style="width: 30px">
              <!-- Menu Footer-->
              <li class="user-footer">
                  <a href="#" class="btn btn-default btn-block btn-flat">Profile</a>
                  <form id="logout-form" style="margin:0px" action="{{ route('logout') }}" method="POST" >
                  @csrf
                  <button class="btn btn-default btn-block btn-flat" style="margin-top: 5px;">Sign out</button> 
                  </form> 
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         <!--  <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >

      <!-- Sidebar user panel (optional) -->
      @if($brgy)
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('/storage/uploads/HEFoo40utgBmjRdI4lwufK5wuuEmYczJrsmSMsM7.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Brgy. {{$brgy->name}}</p>
            <p>{{$brgy->city}} City</p>
            
            
          </div>
        </div>

      @else
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('AdminLTE-2.4.18/dist/img/sample-logo.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Barangay</p>
            <p>City</p>
            
            
          </div>
        </div>

      @endif
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class=" navs-items"></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="@if($title=='Dashboard') active @endif navs-items">
            <a class="@if($title!='Dashboard') notactive @endif" href="/dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
        </li>
        
        <li class="navs-items @if($title=='Resident') active @endif"><a class="@if($title!='Resident') notactive @endif" href="/resident"><i class="fa fa-users"></i> <span> Manage Resident</span></a></li>
        <li class="navs-items @if($title=='Household') active @endif"><a class="@if($title!='Household') notactive @endif" href="/household"><i class="fa fa-home"></i> <span> Manage Household</span></a></li>
        <li class="@if($title=='Judicial') active @endif navs-items"><a class="@if($title!='Judicial') notactive @endif" href="/judicial"><i class="fa fa-gavel"></i> <span> Judicial Cases</span></a></li>
        <li class="treeview @if($title=='Settings') active @else  @endif navs-items ">
          <a class="@if($title!='Settings') notactive @endif" href="#" ><i class="fa fa-gears"></i> <span>Settings</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu " >
            <li><a class="@if($header=='Barangay Profile') text-black @endif" href="/barangay" style="margin-left:20px"><i class="fa fa-angle-double-right"></i> Barangay</a></li>
            <li><a class="@if($header=='Manage Purok' || $header=='Update Purok' || $header=='New Purok') text-black @endif"  href="/purok" style="margin-left:20px"><i class="fa fa-angle-double-right"></i> Purok</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color:#fbfbfb;padding-bottom:10px;box-shadow: 1px 1px 2px rgba(0,0,0,0.1) ">
      <h1 style="font-family: sans-serif;">
        Dashboard
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content container-fluid" style="background-color: #f9f9f9;height: 40em;">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.4.18/dist/js/adminlte.min.js')}}"></script>
<!-- PACE -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/PACE/pace.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
@include('sweetalert::alert')
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- full calendar -->
<link href='{{asset("packages/core/main.css")}}' rel='stylesheet' />
<link href='{{asset("packages/daygrid/main.css")}}' rel='stylesheet' />
<link href='{{asset("packages/timegrid/main.css")}}' rel='stylesheet' />
<link href='{{asset("packages/list/main.css")}}' rel='stylesheet' />
<script src='{{asset("packages/core/main.js")}}'></script>
<script src='{{asset("packages/interaction/main.js")}}'></script>
<script src='{{asset("packages/daygrid/main.js")}}'></script>
<script src='{{asset("packages/timegrid/main.js")}}'></script>
<script src='{{asset("packages/list/main.js")}}'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
<!-- DataTables -->
<script src="{{asset('AdminLTE-2.4.18/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.18/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- bootstrap time picker -->
<script src="{{asset('AdminLTE-2.4.18/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
</body>
</html>


<script type="text/javascript">
  //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
  //Initialize Select2 Elements
  $('.select2').select2();

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
  $(document).ready( function () {
      $('#dtt1').DataTable();
      $('#dtt2').DataTable();
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
  $(document).on('click', '.btn_deletekp', function(e){
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
            $('#'+id).submit();
          }

        });
   });
</script>

@yield('script')