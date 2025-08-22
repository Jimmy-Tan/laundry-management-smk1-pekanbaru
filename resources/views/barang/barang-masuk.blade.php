@extends('layouts.template')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Barang Masuk</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3"></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($barang as $b)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $b->nama }}</td>
                                <td>{{ $b->quantity }}</td>
                                <td>{{ $b->satuan }}</td>
                                <td>{{ $b->harga }}</td>
                                <td>
                                    <a href="#modalTambah{{ $b->id }}" class="btn btn-primary btn-icon-split"
                                        data-bs-toggle="modal">
                                        <span class="icon text-white-50">
                                            <i class="bi bi-plus-lg"></i>
                                        </span>
                                        <span class="text">Tambah</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach ($barang as $br)
            <!-- Modal Tambah-->
            <div class="modal fade" id="modalTambah{{ $br->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Masuk</h1>
                            <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/barang-masuk/store/{{ $br->id }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="col-form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        value="{{ $br->nama }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="col-form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity"
                                        value="{{ $br->quantity }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Satuan</label>
                                    <input type="text" class="form-control" name="satuan" id="satuan"
                                        value="{{ $br->satuan }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="col-form-label">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga"
                                        value="{{ $br->harga }}" readonly>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="tambahStock" class="col-form-label">Tambah Stock</label>
                                    <input type="number" class="form-control" name="tambahStock" id="tambahStock">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_masuk" class="col-form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
