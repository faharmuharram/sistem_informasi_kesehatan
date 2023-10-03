<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Jenis Obat</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('add_m_jenis_obat') }}" method="post">
        @csrf
        <p>Code</p>
        <input type="text" name="kode" placeholder="Input Kode" value="{{ old('kode') }}">
        <p>Nama</p>
        <input type="text" name="nama" placeholder="Input Nama Jenis Obat" value="{{ old('nama') }}">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>