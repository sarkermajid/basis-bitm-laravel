<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel crud</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-3">
        <div class="container">
            <a href="" class="navbar-brand">Laravel Crud</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('product.add') }}" class="nav-link">Add Product</a></li>
                <li><a href="{{ route('product.manage') }}" class="nav-link">Manage Product</a></li>
            </ul>
        </div>
    </nav>

@yield('body')

<script src="{{ asset('/') }}js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}js/jquery-3.6.1.min.js"></script>
</body>
</html>
