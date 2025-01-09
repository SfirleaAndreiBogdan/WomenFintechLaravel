<!-- resources/views/layouts/app.blade.php -->
<html>
<head>
    <title>WomenFintech</title>
</head>
<body>
    @include('components.header')

    <div class="container mb-5">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>
