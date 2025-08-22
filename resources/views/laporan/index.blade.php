<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

@extends('layouts.template')
@section('content')

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('laporan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH LAPORAN</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Laporan</th>
                                    <th scope="col">Barang Masuk</th>
                                    <th scope="col">Barang Keluar</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $laporan)
                                    <tr>
                                        <td>{{ $laporan->nama_laporan }}</td>
                                        <td>{{ $laporan->barang_masuk }}</td>
                                        <td>{!! $laporan->barang_keluar !!}</td>
                                        <td class="text-center">
                                            <!-- Button to trigger modal -->
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal{{ $laporan->id_laporan }}">
                                                EDIT
                                            </button>
                                            

                                            <!-- Modal -->
                                            <div class="modal fade" id="editModal{{ $laporan->id_laporan }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Laporan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Include your edit form here -->
                                                            <form action="{{ route('laporan.update', $laporan->id_laporan) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Nama laporan</label>
                                                                    <input type="text" class="form-control @error('nama_laporan') is-invalid @enderror" name="nama_laporan" placeholder="Nama laporan" value="{{ $laporan->nama_laporan }}">
                                                                    @error('nama_laporan')
                                                                    <div class="alert alert-danger mt-2">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Barang Masuk</label>
                                                                    <input type="text" class="form-control @error('barang_masuk') is-invalid @enderror" name="barang_masuk" value="{{ $laporan->barang_masuk }}">
                                                                    @error('barang_masuk')
                                                                    <div class="alert alert-danger mt-2">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">Barang Keluar</label>
                                                                    <input type="text" class="form-control @error('barang_keluar') is-invalid @enderror" name="barang_keluar" value="{{ $laporan->barang_keluar }}">
                                                                    @error('barang_keluar')
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
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('laporan.destroy', $laporan->id_laporan) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data laporan belum Tersedia.
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