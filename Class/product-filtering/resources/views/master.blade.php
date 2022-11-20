@php
use App\Models\Category;
use App\Models\Brand;
$categories = new Category();
$categories = $categories->getAllCategory();
$brands = new Brand();
$brands = $brands->getAllBrand();
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Catrgory</a>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                    <li><a href="{{ route('category', ['id' =>$category['id']]) }}" class="dropdown-item">{{ $category['name'] }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu">
                    @foreach($brands as $brand)
                    <li><a href="{{ route('brand', ['id'=>$brand['brand_id']]) }}" class="dropdown-item">{{ $brand['brand_name'] }}</a></li>
                    @endforeach
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
