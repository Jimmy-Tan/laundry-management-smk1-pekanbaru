<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

@extends('layouts.template')
@section('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('barang.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BARANG</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Barang Masuk</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $barang)
                                    <tr>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->jumlah }}</td>
                                        <td>{!! $barang->tanggal_barang_masuk !!}</td>
                                        <td class="text-center">
                                            <!-- Button to trigger edit modal -->
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal{{ $barang->id_barang }}">
                                                EDIT
                                            </button>

                                            <!-- Modal for edit -->
                                            <div class="modal fade" id="editModal{{ $barang->id_barang }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Data Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Include your edit form here -->
                                                            <form action="{{ route('barang.update', $barang->id_barang) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Nama Barang</label>
                                                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
                                                                    @error('nama_barang')
                                                                        <div class="alert alert-danger mt-2">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Jumlah</label>
                                                                    <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ $barang->jumlah }}">
                                                                    @error('jumlah')
                                                                        <div class="alert alert-danger mt-2">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Tanggal barang masuk</label>
                                                                    <input type="date" class="form-control @error('tanggal_barang_masuk') is-invalid @enderror" name="tanggal_barang_masuk" value="{{ $barang->tanggal_barang_masuk }}">
                                                                    @error('tanggal_barang_masuk')
                                                                        <div class="alert alert-danger mt-2">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Form for delete -->
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $barang->id_barang) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data barang belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>
@endsection