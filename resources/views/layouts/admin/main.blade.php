<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chillz</title>

    <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
   
    <!-- Wrapper Start -->
    <div class="wrapper">
       @include('layouts.admin.sidebar')
       @include('layouts.admin.topnav')

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
            @yield('content')
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    
    @include('layouts.admin.footer')
    @include('layouts.admin.footerScripts')

</body>
</html>