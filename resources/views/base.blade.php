<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Prelim App</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-md-2">
        <a class="navbar-brand" href="/">
            <img src="http://www.mdc.ph/wp-content/themes/mdc/images/MDC-Logo-clipped.png" width="40" height="40" alt="https://www.mdc.ph/">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link box text-light" href="/"><b>Home</b></a>
                </li>
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-light" href="/dashboard"><b>Dashboard</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-light" href="/logout"><b>Logout</b></a>
                        </li>
                    @else
                        <li>
                            <a class="nav-link box text-light" href="/login"><b>Login</b></a>
                        </li>
                    @endif
                </ul>
            </form>
        </div>
      </nav>

    @if (session('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{ session('Error') }}
            </div>
        </div>
    @endif
    @if (session('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{ session('Message') }}
            </div>
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>
</body>
</html>