<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
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
                        <a href="{{ route('listcucian.create') }}" class="btn btn-md btn-success mb-3">TAMBAH JENIS CUCIAN</a>
                        <table class="table" id=pelangganTable>
                            <thead>
                                <tr>
                                    <th scope="col">List Cucian</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $list_harga)
                                    <tr>
                                        <td>{{ $list_harga->jenis_cucian }}</td>
                                        <td>{{ $list_harga->harga }}</td>

                                        <td>
                                          
                                            <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#editModal{{ $list_harga->id_list }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <form action="{{ route('listcucian.destroy', $list_harga->id_list) }}" method="post" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
        <i class="bi bi-trash"></i>
    </button>
</form>
                                            <!-- Delete form -->
                                        
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $list_harga->id_list }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit List Cucian</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form for editing -->
                                                    <form action="{{ route('listcucian.update', $list_harga->id_list) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form">
                                                            <label for="jenis_cucian">Jenis Cucian:</label>
                                                            <input type="text" class="form-control" id="jenis_cucian" name="jenis_cucian" value="{{ $list_harga->jenis_cucian }}" required>
                                                        </div>
                                                        <div class="form">
                                                            <label for="harga">Harga:</label>
                                                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $list_harga->harga }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        Data cucian belum Tersedia.
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#pelangganTable').DataTable(); 
        });
    </script>
</body>

</html>
@endsection
