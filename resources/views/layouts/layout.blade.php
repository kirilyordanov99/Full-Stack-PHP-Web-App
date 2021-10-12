<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>@yield('title', 'CarFactory')</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            font-size: 16px;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav nav-tabs mt-2" id="nav-tab" role="tablist">
        <a class="nav-item ml-2 mr-5">
            <div class="input-group-append row">
                    <form action="/search" method="GET" style="margin-left: 10px">
                        <div class="input-group">
                            <input type="search" name="search" placeholder="Search for..." class="form-control">
                            <select class="custom-select" name="search_by" id="searchBy">
                                <option value="year" selected>Search by year.</option>
                                <option value="model">Search by model.</option>
                                <option value="brand">Search by brand.</option>
                            </select>
                    <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
            </div>
        </a>
        @if (Route::has('login'))
                @auth
                    <a class="nav-item nav-link" id="cars" href="/cars" aria-selected="true">Cars
                    </a>
                    <a class="nav-item nav-link" id="brands" href="/brands" aria-selected="false">Brands
                    </a>
                    <a class="nav-item nav-link" id="images" href="/images" aria-selected="false">Images
                    </a>
                @else
                    <div class="m-md-1">
                        <a class="input-group-text" href="{{ route('login') }}">Login</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="m-md-1">
                        <a class="input-group-text" href="{{ route('register') }}">Register</a>
                    </div>
                    @endif
                @endauth
        @endif
    </div>
</nav>
<div class="content">
    @yield('content')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script>
    $(document).ready(function () {
        $("#@yield('menuItem', '')").addClass('active');
    });
</script>
</body>
</html>