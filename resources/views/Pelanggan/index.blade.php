

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <style>
        .table-container {
            margin-top: 50px;
        }

        table {
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .table-responsive {
            overflow-x: auto;
        }
        body {
            background-color: #f8f9fe; /* Ganti dengan warna latar belakang yang diinginkan */
        }

        .container {
            background-color: #ffffff; /* Ganti dengan warna latar belakang yang diinginkan */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333; /* Ganti dengan warna teks yang diinginkan */
        }

        table {
            background-color: #ffffff; /* Ganti dengan warna latar belakang yang diinginkan */
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        thead {
            background-color: #5e72e4; /* Ganti dengan warna latar belakang yang diinginkan */
            color: #ffffff; /* Ganti dengan warna teks yang diinginkan */
        }

        tbody tr:hover {
            background-color: #f5f5f5; /* Ganti dengan warna latar belakang yang diinginkan saat dihover */
        }
    </style>
</head>
@extends('layouts.template')
@section('content')
<body>
<div class="container table-container">
        <h2>Data Pelanggan</h2>
        <div class="table-responsive">
        <table id="pelangganTable" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_pelanggan as $pelanggan)
                        <tr>
                            <td>{{ $pelanggan->name }}</td>
                            <td>{{ $pelanggan->email }}</td>
                            <td>{{ $pelanggan->no_hp }}</td>
                            <td>{{ $pelanggan->created_at }}</td>
                            <td>{{ $pelanggan->updated_at }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-primary edit-button" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $pelanggan->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <a href="{{ url('/delete-pelanggan', $pelanggan->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{ $pelanggan->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $pelanggan->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $pelanggan->id }}">Edit Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your edit form here with the necessary fields -->
                <form action="{{ url('/update-pelanggan', $pelanggan->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $pelanggan->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $pelanggan->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Phone Number:</label>
                        <input type="text" class="form-control" name="no_hp" value="{{ $pelanggan->no_hp }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#pelangganTable').DataTable(); // Replace 'pelangganTable' with the actual ID of your table
    });
</script>
@endsection