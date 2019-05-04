<!DOCTYPE HTML>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <title>@yield('title')</title>
    @include('nasabah.partials.top-resource')
</head>
<body>
<!-- Navbar  -->
@include('nasabah.partials.navbar')
<!-- Page Contents -->
<div class="pusher">
    <!-- Sidebar -->
    @include('nasabah.partials.sidebar')
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <!-- Contents -->
            @yield('content')
        </div>
    </div>
    <!-- Footer -->
    @include('nasabah.partials.footer')
</div>
</body>
</html>
