
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">

        <div class="header">
            @include('template.header')
        </div>

        <div class="banner"></div>

        <div class="isi">

            <div class="sidebar">
                @include('template.sidebar')
            </div>

            <div class="content">
                @yield('content')
            </div>

        </div>

    </div>

</body>
</html>
