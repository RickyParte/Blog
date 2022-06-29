<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Blog</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@extends('layout.main')
@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Your Blogs</h3>
            </div>

            <div class="card-body table-responsive p-0">
             <table class="table table-hover text-nowrap">
            <thead>
            <tr>
            <th>ID</th>
            <th>Post Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->titleofpost }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->createddate }}</td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <a href="{{ url('/delete') }}/{{$post->id}}" ><i class="fa-solid fa-ban text-danger"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="{{ url('/edit') }}/{{$post->id}}"><i class="fa-solid fa-pen-to-square text-primary"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
            </table>
            </div>

            </div>


                </div>

                </div>

          </div>

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
@endsection
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
</body>
</html>
