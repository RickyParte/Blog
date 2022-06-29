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
            <tr>

            </tbody>
            </table>
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


</body>
</html>
