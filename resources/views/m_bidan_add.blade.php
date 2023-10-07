<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Master Bidan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    @endif
    <form action="" method="POST">
        <div class="container-fluid p-4">
            <div class="row" style="margin-bottom:10px; margin-left:0px;">
				<h5 class="p-0"><strong>Formulir Data Bidan</strong></h5>
				<h6 class="p-0" style="font-family: sans-serif;font-size: 13;">Jawablah dengan jujur dan benar!</h6>
			</div>
            <div class="row" style="margin-bottom:6px">
                <div class="col-12">
                    Nama Lengkap<font color="#f00">*</font>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Bidan">
                </div>
            </div>
            <div class="row" style="margin-bottom:6px">
                <div class="col-8">
                    <p class="mb-0">Kota Tempat Lahir<font color="#f00">*</font></p>
                </div>
                <div class="col-4">
                    <p class="mb-0">Tanggal Lahir<font color="#f00">*</font></p>
                </div>
            </div>
            <div class="row" style="margin-bottom:6px">
                <div class="col-8">
                        <input type="text" class="form-control" name="kota_lahir" placeholder="Masukan Kota Lahir">
                </div>
                <div class="col-4">
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
            </div>
            <div class="row" style="margin-bottom:6px">
                <div class="col-12">
                    No Telepon<font color="#f00">*</font>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="no_tlp" placeholder="Masukan No Telepon">
                </div>
            </div>
            <div class="row mt-5" style="margin-bottom:6px">
				<div class="col-sm-12">
					<a href="{{ route('view_m_bidan') }}">
                        <button type="button" class="btn btn-light">Close</button>
                    </a>
					<button type="submit" class="btn btn-warning">Save</button>
				</div>
			</div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>