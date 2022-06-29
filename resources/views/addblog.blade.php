<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Blog</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@extends('layout.main')
@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper login-page">
        <div class="login-box">

            <!-- /.login-logo -->
            <div class="card">
              <div class="card-body login-card-body">
                <h3 class="login-box-msg">Add New Blog</h3>

                <form action="" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="blogname">Blog Title</label>
                        <input type="text" class="form-control" name="blogname" placeholder="Enter Blog Title">
                      </div>
                      <div class="form-group">
                        <label for="blogdesc">Blog Description</label>
                        <textarea class="form-control" name="blogdescription" placeholder="Enter Blog Description"></textarea>
                      </div>
                    </div>
                    <div class="card-body ">
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </form>

              </div>
              <!-- /.login-card-body -->
            </div>
          </div>

      </section>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
@endsection


</body>
</html>
