<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        .background-container {
            background-image: url('https://hpii.or.id/assets/upload/image/sistem_informasi_kesehatan.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <div class="container-fluid background-container">
        <div class="row align-items-center justify-content-center" style="height: 100vh;">
            <div class="col-4">
                <p> </p>
            </div>
            <div class="col-4 border p-5 bg-white rounded">
                <h2 class="text-center mb-2"><b>SIK</b><br>Sistem Informasi Kesehatan</h2>
                <hr>
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-warning btn-block px-5">Log In</button>
                    </div>
                    <hr>
                    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                </form>
            </div>
            <div class="col-4">
                <p> </p>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>