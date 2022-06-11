<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    --}}

    {{-- <link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css"> --}}
</head>

<body>
    @include('layouts._navbar')

    <div class="container mt-4 pt-5">
        <div class="row pt-5">
            <div class="col-12 mb-3">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>

            <div class="col-12 mb-3">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>

            <div class="col-12 mb-3">
                @if (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
                @endif
            </div>
        </div>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
