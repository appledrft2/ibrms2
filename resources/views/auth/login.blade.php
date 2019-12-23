<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="IBRMS - Integrated Barangay Records Management System">
    <meta name="author" content="anonymous">
    <meta name="keyword" content="IBRMS">
    <title>IBRMS - Integrated Barangay Records Management System</title>
    <!-- Icons-->
    <link rel="icon" href="coreui/img/ibrmslogo.png" type="image/x-icon" />
    <link href="coreui/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="coreui/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="coreui/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="coreui/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="coreui/css/style.css" rel="stylesheet">
    <link href="coreui/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input required class="form-control" type="email" name="email" placeholder="Email">
                  
                </div>

                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input required class="form-control" type="password" name="password" placeholder="Password">
                </div>

                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                </form>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                  </div>
                </div>
            
              </div>
              @error('email')
                  <span class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>IBRMS</h2>
                  <h4>Integrated Barangay Records Management System</h4>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="coreui/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="coreui/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="coreui/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="coreui/node_modules/pace-progress/pace.min.js"></script>
    <script src="coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="coreui/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>