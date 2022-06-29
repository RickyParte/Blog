<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body class="hold-transition  sidebar-mini">
    <div class="wrapper">

        @include('layout.nav')

        @include('layout.sidebar')

        @yield('content')

        @include('layout.footer')

        @include('layout.script')

    </div>
</body>
</html>
