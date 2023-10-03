<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="fixed-top container-fluid bg-warning p-1" style="height: 56px;">
        <div class="row align-items-center">
            <div class="col-1 text-center p-0 m-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" 
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828859.png" style="height:30px;" alt="">
                </button>
            </div>
            <div class="col text-start">
                <a class="text-black" style="font-size: 30px; text-decoration: none; margin-left:-20px;" href="{{ route('index') }}">Sistem Informasi Kesehatan</a>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Obat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('view_m_jenis_obat') }}">Master Jenis Obat</a></li>
                        <li><a class="dropdown-item" href="{{ route('view_m_obat') }}">Master Obat</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 60px; margin-bottom:40px;">

    </div>
    
    <div class="fixed-bottom container-fluid bg-warning py-1" style="height:35px;">
        <p class="text-black m-0 text-center" style="font-size: 14px;">Create by<b> Fahar Muharram Arizky</b></p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>