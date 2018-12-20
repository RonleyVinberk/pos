<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('gentelellaassets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gentelellaassets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gentelellaassets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('gentelellaassets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('gentelellaassets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('gentelellaassets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('gentelellaassets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    
    <!-- Datatables -->
    <link href="{{asset('gentelellaassets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelellaassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelellaassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelellaassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gentelellaassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gentelellaassets/builds/css/custom.min.css')}}" rel="stylesheet" />
</head>
{{-- Home Page --}}
@if (Auth::check())
<body class="nav-md">
    
    {{-- start container body --}}
    <div class="container body">

        {{-- start main_container --}}
        <div class="main_container">
            @include('header')
            @include('sidebar')
            @yield('home_content')
            @yield('stuff_content')
            @yield('type-stuff_content')
            @yield('supplier_content')
            @yield('country_content')
            @yield('province_content')
            @yield('selling_content')
        </div>
        {{-- end main_container --}}
                
    </div>
    {{-- end container body --}}
        
    @include('footer_javascript')
</body>
@endif

{{-- Login Page --}}
@if (Auth::guest())
<body class="login">
    @yield('login_content')
    @include('footer_javascript')
</body>
@endif    
</html>