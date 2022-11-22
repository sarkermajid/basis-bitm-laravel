<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Project</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow">
        <div class="container">
            <a href="" class="navbar-brand">Blog Website</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('category.index') }}" class="dropdown-item">Add Category</a></li>
                        <li><a href="{{ route('category.manage') }}" class="dropdown-item">Manage Category</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('blog.create') }}" class="dropdown-item">Add Blog</a></li>
                        <li><a href="{{ route('blog.index') }}" class="dropdown-item">Manage Blog</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    @yield('body')

<script src="{{ asset('/') }}js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}js/jquery-3.6.1.min.js"></script>
</body>
</html>
