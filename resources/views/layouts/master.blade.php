<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ANOA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CRUD
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('crudbasic.index') }}">CRUD Basic</a></li>
                            <li><a class="dropdown-item" href="{{ route('slug.index') }}"">CRUD + Slug</a></li>
                            <li><a class="dropdown-item" href="#">CRUD + IMAGE</a></li>
                            <li><a class="dropdown-item" href="#">CRUD + Searching</a></li>
                            <li><a class="dropdown-item" href="#">CRUD + Sorting</a></li>
                            <li><a class="dropdown-item" href="#">CRUD + Multiple Delete</a></li>
                            <li><a class="dropdown-item" href="#">CRUD + CKEditor</a></li>
                            <li><a class="dropdown-item" href="#">CRUD Full Component Input</a></li>
                            <li><a class="dropdown-item" href="#">CRUD With Validate</a></li>
                            <li><a class="dropdown-item" href="#">CRUD With Custome Validate</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
