<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
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
                @if (Session::has('message'))
                    <p class="text-center text-success">
                        <b>
                            {{ session()->get('message') }}
                        </b>
                    </p>
                 @endif
                @if (Session::has('error'))
                    <p class="text-center text-danger">
                        <b>
                            {{ session()->get('error') }}
                        </b>
                    </p>
                @endif

                <h3 class="login-box-msg">Update Blog</h3>
                @foreach ($posts as $post)
                <form action="/updatepost/{{$post->id}}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                          <label for="blogname">Blog Title</label>
                          <input type="text" class="form-control" name="blogtitle" value="{{$post->titleofpost}}" placeholder="Enter Blog Title">
                        </div>
                        <div class="mb-2">
                          <span class="text-danger">
                              <b>
                                  @error('blogtitle')
                                      {{$message}}
                                  @enderror
                              </b>
                          </span>
                      </div>
                        <div class="form-group">
                          <label for="blogdesc">Blog Description</label>
                          <textarea class="form-control" name="blogdescription" placeholder="Enter Blog Description">{{$post->description}}</textarea>
                        </div>
                      </div>
                      <div class="mb-2">
                          <span class="text-danger">
                              <b>
                                  @error('blogdescription')
                                      {{$message}}
                                  @enderror
                              </b>
                          </span>
                      </div>
                      <div class="card-body ">
                          <button type="submit" class="btn btn-primary col-12">Submit</button>
                      </div>
                    @endforeach

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
