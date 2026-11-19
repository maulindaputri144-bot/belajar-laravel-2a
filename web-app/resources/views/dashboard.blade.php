
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Laravel</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>
<body>

    <div id="wrapper">
        @include('template.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.header')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('template.footer')
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
