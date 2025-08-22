@extends('layouts.template')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">History Barang Masuk</h1>
    <div class="card shadow mb-4">
      
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table" id="pelangganTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Satuan</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($barang_masuk as $b)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $b->nama }}</td>
                                <td>{{ $b->quantity }}</td>
                                <td>{{ $b->satuan }}</td>
                                <td>{{ $b->tanggal_masuk }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#pelangganTable').DataTable(); 
        });
    </script>
    @endsection

    @section('js')
        <script>
            function printTable() {
                var printContents = document.getElementById('dataTable').outerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
    @endsection