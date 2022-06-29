
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="register-box">
  <div class="register-logo">
    <a><b>Register</b>Page</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    @if (Session::has('message'))
    <p class="text-center text-success"><b>{{ session()->get('message') }}</b></p>
    @endif
    @if (Session::has('error'))
    <p class="text-center text-danger"><b>{{ session()->get('error') }}</b></p>
    @endif

      <p class="register-box-msg">Sign Up</p>

      <form action="/register" method="post">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Your Fulll Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="mb-2">
            <span class="text-danger">
                <b>
                    @error('name')
                        {{ $message }}
                    @enderror
                </b>
            </span>
        </div>
        <div class="input-group mt-3">
            <input type="text" class="form-control" name="username" value="{{old('name')}}" placeholder="Enter Your Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="mb-2">
              <span class="text-danger">
                  <b>
                      @error('name')
                          {{ $message }}
                      @enderror
                  </b>
              </span>
          </div>

        <div class="input-group mt-3">
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="mb-2">
              <span class="text-danger">
                  <b>
                      @error('email')
                          {{ $message }}
                      @enderror
                  </b>
              </span>
          </div>

        <div class="input-group mt-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-2">
            <span class="text-danger mb-2">
                <b>
                    @error('password')
                        {{ $message }}
                    @enderror
                </b>
            </span>
        </div>


          <!-- /.col -->
          <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->

      </form>
      <p class="mb-1 mt-2  text-center">
        <a href="/">Return To Login Page</a>
      </p>
    </div>
    <!-- /.Register-card-body -->
  </div>
</div>
<!-- /.register-boxs -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</body>
</html>
