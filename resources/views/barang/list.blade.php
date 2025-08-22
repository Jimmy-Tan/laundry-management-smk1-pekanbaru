@extends('layouts.template')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Daftar Barang</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <span class="icon text-white-50">
                    <i class="bi bi-plus-lg"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table " id="pelangganTable" width="100%" cellspacing="0">
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
                                    <a href="#modalEdit{{ $b->id }}" class="btn btn-primary" data-bs-toggle="modal">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#modalHapus{{ $b->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    {{-- <form action="/list/destroy/{{ $b->id }}" method="get">
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah-->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/list/store" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="quantity" id="quantity" value="0">
                            <div class="mb-3">
                                <label for="nama" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="col-form-label">Satuan</label>
                                <input type="text" class="form-control" name="satuan" id="satuan">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="col-form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" id="harga">
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

        <!-- Modal Edit-->
        @foreach ($barang as $br)
            <div class="modal fade" id="modalEdit{{ $br->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Barang</h1>
                            <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/list/update/{{ $br->id }}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="quantity" id="quantity" value="0">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        value="{{ $br->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Satuan</label>
                                    <input type="text" class="form-control" name="satuan" id="satuan"
                                        value="{{ $br->satuan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga"
                                        value="{{ $br->harga }}">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($barang as $bar)
            <!-- Modal Hapus-->
            <div class="modal fade" id="modalHapus{{ $bar->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Hapus Data</div>
                        <form action="/list/destroy/{{ $bar->id }}" method="GET">
                            @csrf
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">
                                    Hapus
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         

        @endforeach
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#pelangganTable').DataTable(); // Replace 'pelangganTable' with the actual ID of your table
        });
    </script>
    @endsection
