<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .logo {
            display: block;
            margin: 0 auto;
            max-width: 200px;
            height: auto;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            color: #333;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .player-card {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }

        .player-name {
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <img src="{{ asset('img/logo.png') }}" alt="logo" width="200" height="200"><br>
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/inici">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/jugadores">Jugadores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/dorsales">Dorsales</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div id="jugadores" class="d-flex flex-wrap justify-content-center">
    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/ky.jpg') }}" alt="Kyrie Irving" width="350" height="350">
        <figcaption class="player-name">Kyrie Irving</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/ld.jpg') }}" alt="Luka Doncic" width="350" height="350">
        <figcaption class="player-name">Luka Doncic</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/cw.jpg') }}" alt="Christian Wood" width="350" height="350">
        <figcaption class="player-name">Christian Wood</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/jh.jpg') }}" alt="Jaden Hardy" width="350" height="350">
        <figcaption class="player-name">Jaden Hardy</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/jg.jpg') }}" alt="Josh Green" width="350" height="350">
        <figcaption class="player-name">Josh Green</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/th.jpg') }}" alt="Tim Hardaway Jr." width="350" height="350">
        <figcaption class="player-name">Tim Hardaway Jr.</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/rb.jpg') }}" alt="PlReggie Bullock" width="350" height="350">
        <figcaption class="player-name">Reggie Bullock</figcaption>
    </div>

    <div class="player-card col-lg-4 col-md-6 col-sm-12">
        <img src="{{ asset('img/db.jpg') }}" alt="Davis Bertans" width="350" height="350">
        <figcaption class="player-name">Davis Bertans</figcaption>
    </div>
</div>
    @yield('content')
</body>
</html>