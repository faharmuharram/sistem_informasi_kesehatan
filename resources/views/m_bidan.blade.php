<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Bidan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="fixed-top container-fluid bg-warning p-1" style="height: 80px;">
        <div class="row align-self-center">
            <div class="col-1 text-center p-0 m-0 align-self-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" 
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828859.png" style="height:40px;" alt="">
                </button>
            </div>
            <div class="col-1 text-start align-self-center">
                <a class="text-black" style="font-size: 30px; text-decoration: none; margin-left:-20px;" href="{{ route('index') }}">
                    <img src="https://cdn-icons-png.flaticon.com/128/4807/4807695.png" style="height:60px;" alt="">
                </a>
            </div>
            <div class="col text-start align-self-center">
                <p class="mb-0" style="font-size: 30px; text-decoration: none; margin-left:-60px;">Sistem Informasi Kesehatan</p>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="navbar-nav">
                <li class="nav-item border p-1" style="background-color:yellow; border-color: yellow !important;">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">
                        <div class="row text-center align-self-center">
                            <div class="col-2">
                                <img src="https://cdn-icons-png.flaticon.com/128/5974/5974636.png" alt="" style="height:24px">
                            </div>
                            <div class="col text-start">
                                <b>Home</b>
                            </div>
                        </div>
                    </a>
                   </li>
                <li class="nav-item border p-1" id="master-menu">
                    <a class="nav-link" href="#">
                        <div class="row text-center align-self-center">
                            <div class="col-2">
                                <img src="https://cdn-icons-png.flaticon.com/128/2828/2828856.png" alt="" style="height:24px">
                            </div>
                            <div class="col-8 text-start">
                                <p class="m-0"><b>Master</b></p>
                            </div>
                            <div class="col">
                                <img src="https://cdn-icons-png.flaticon.com/128/32/32195.png" alt="Panah ke bawah" style="height:16px;">
                            </div>
                        </div>
                    </a>
                    <ul class="submenu">
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_bidan') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/3304/3304567.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Bidan</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_pasien') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/3597/3597742.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Pasien</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_layanan') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/4394/4394562.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Layanan</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_jenis_layanan') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/1390/1390708.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Jenis Layanan</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_obat') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/4005/4005484.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Obat</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="{{ route('view_m_jenis_obat') }}">
                                <div class="row text-center align-self-center">
                                    <div class="col-2">
                                        <img src="https://cdn-icons-png.flaticon.com/128/647/647237.png" alt="" style="height:24px">
                                    </div>
                                    <div class="col text-start">
                                        <p class="m-0">Jenis Obat</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </ul>
                </li>
            </ul>                                             
        </div>
    </div>
    <div class="container-fluid border p-4" style="margin-top: 90px; margin-bottom:40px;">
        <div class="bg-black py-2 px-4 mb-3" style="max-width: 100%;">
            <b style="font-size:20px; color:#ffc107;">Master Bidan</b>
        </div>
        <div class="mb-3">
            <a href="{{ route('add_m_bidan') }}">
                <button type="button" class="btn btn-warning" style="color:white">Tambah Data</button>
            </a>
        </div>
        <table class="table rounded" border="1">
            <tr>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>
            @foreach ($datas as $key => $data)
            <tr>
                <td class="text-center">{{$key + 1}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->kota_lahir}}, {{$data->tgl_lahir}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_telp}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <div class="fixed-bottom container-fluid bg-warning py-1" style="height:35px;">
        <p class="text-black m-0 text-center" style="font-size: 14px;">Create by<b> Fahar Muharram Arizky</b></p>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>