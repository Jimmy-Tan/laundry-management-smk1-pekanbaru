<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstr
ap.min.css">
</head>
@extends('layouts.template')
@section('content')
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Barang</label>

                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" placeholder="Nama Barang">

                                <!-- error message untuk nama_barang -->
                                @error('nama_barang')
                                    <div class="alert alert-danger

mt-2">

                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah</label>

                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                    name="jumlah" placeholder="Jumlah Barang Masuk">

                                <!-- error message untuk nama_barang -->
                                @error('jumlah')
                                    <div class="alert alert-danger

mt-2">

                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Barang Masuk</label>

                                <input type="datetime-local"
                                    class="form-control
@error('tanggal_barang_masuk') is-invalid @enderror" name="tanggal_barang_masuk">
<!-- error message untuk tanggal_barang_masuk

-->

@error('tanggal_barang_masuk')
    <div class="alert alert-danger

mt-2">

    {{ $message }}
    </div>
@enderror
</div>
<button type="submit" class="btn btn-md

btn-primary">SIMPAN</button>

<button type="reset" class="btn btn-md

btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.
js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap
.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
</body>
</html>
@endsection