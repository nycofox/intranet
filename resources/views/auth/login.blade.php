<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/united.bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">
<main class="container pt-5">
    <div class="col-md-4 offset-4">
        <div class="card bg-gradient bg-light">
            <div class="card-body text-center">
                <h4>Welcome to {{ config('app.name') }}</h4>
                <div class="mb-4">Log in using your Google Account:</div>
                    <a href="{{ route('login.google') }}" class="btn btn-primary">
                        <i class="fa-brands fa-google"></i>
                        &nbsp;&nbsp;Sign in using Google
                    </a>
            </div>
        </div>
    </div>
</main>
</body>
</html>
