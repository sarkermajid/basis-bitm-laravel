<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom">
    <div class="container">
        <a href="" class="navbar-brand">Laravel</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="{{ route('category') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Catrgory</a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item">Category 1</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="{{ route('brand') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item">Brand 1</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<script src="{{ asset('/') }}js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}js/jquery-3.6.1.min.js"></script>
</body>
</html>
