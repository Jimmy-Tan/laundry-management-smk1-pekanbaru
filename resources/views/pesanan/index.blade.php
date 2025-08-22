<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>

@extends('layouts.template')
@section('content')

<<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="mb-3">
                           
</div>
                        <a href="{{ route('pesanan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        

       
                        <table id="pelangganTable" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Jenis Cucian</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Pesan</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $pesanan)
                                    <tr>
                                        <td>{{ $pesanan->user_name }}</td>
                                        <td class="text-center">{{ $pesanan->jenis_cucian }}</td>
                                        <td class="{{ $pesanan->status == 'Selesai' ? 'text-success' : 'text-danger' }}">
                                            {{ $pesanan->status }}
                                        </td>
                          
    <td>{{ $pesanan->tanggal_pemesanan }}</td>
    <td>{{ $pesanan->berat }}</td>
    <td>{{ $pesanan->harga }}</td>
    <td class="action-buttons">



    

                                            <a href="#" class="btn btn-primary edit-button"
                                                data-toggle="modal"
                                                data-target="#editModal"
                                                data-id="{{ $pesanan->id_pesanan }}"
                                                data-jenis="{{ $pesanan->jenis_cucian }}"
                                                data-status="{{ $pesanan->status }}"
                                                data-tanggal="{{ $pesanan->tanggal_pemesanan }}"
                                                data-berat="{{ $pesanan->berat }}"><i class="bi bi-pencil-square"></i></a>
                                    
                                         
                                                <form action="{{ route('pesanan.destroy', $pesanan->id_pesanan) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
        <i class="bi bi-trash"></i>
    </button>
</form>
                                
<button class="btn btn-primary btn-icon-split" onclick="printBill('{{ $pesanan->id_pesanan }}', '{{ $pesanan->user_name }}', '{{ $pesanan->jenis_cucian }}', '{{ $pesanan->tanggal_pemesanan }}', '{{ $pesanan->harga }}')">
                    <i class="bi bi-receipt"></i>
                </button>
       
           
   
     
    </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <div class="alert alert-danger">
                                                Data pesanan belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="printBillModal" tabindex="-1" role="dialog" aria-labelledby="printBillModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="printBillModalLabel">Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="printBillContent">
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="printModalContent()">Print</button>
            </div>
        </div>
    </div>
</div>

    @include('pesanan.edit')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      

        $('.edit-button').on('click', function() {
    var id = $(this).data('id');
    var jenis = $(this).data('jenis');
    var status = $(this).data('status');
    var tanggal = $(this).data('tanggal');
    var berat = $(this).data('berat');

    $('#editModal [name="jenis_cucian"]').val(jenis);  
    $('#editModal [name="status"]').val(status);
    $('#editModal [name="tanggal_pemesanan"]').val(tanggal);
    $('#editModal [name="berat"]').val(berat);

    var action = "{{ route('pesanan.update', ':id') }}";
    action = action.replace(':id', id);
    $('#editModal form').attr('action', action);
});
    </script>
  <script>
    document.getElementById('searchInput').addEventListener('input', function() {
        var searchTerm = this.value.trim().toLowerCase();
        var tableRows = document.querySelectorAll('tbody tr');

        tableRows.forEach(function(row) {
            var rowText = row.textContent.toLowerCase();
            if (rowText.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script><script>
    function printBill(id, userName, jenisCucian, tanggalPemesanan, harga, berat) {
        var billContent = `
            <div style="max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif;">

                <div style="text-align: center; margin-bottom: 20px;">
                    <img src="https://smkn1pekanbaru.sch.id/wp-content/uploads/2022/10/Desain-tanpa-judul.png" style="max-width: 100%; height: auto;">
                </div>

                <div style="text-align: right;">
                    <strong>Invoice #:</strong> ${id}<br>
                    <strong>Date:</strong> ${tanggalPemesanan}<br>
                </div>

                <div style="margin-top: 20px;">
                    <strong>Billed To:</strong><br>
                    ${userName}<br>
                </div>

                <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Amount</th>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">${jenisCucian}</td>
                        <td style="padding: 10px; border: 1px solid #ddd; text-align: right;">Rp.${harga}</td>
                    </tr>
                </table>

                <div style="margin-top: 20px; text-align: right;">
                    <strong>Total: Rp.${harga}</strong>
                </div>

            </div>
        `;

        document.getElementById('printBillContent').innerHTML = billContent;

       
        $('#printBillModal').modal('show');
    }
</script>
<script>
    function printModalContent() {
        var printWindow = window.open('', '_blank');
        printWindow.document.open();
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Bill</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            </head>
            <body>
                <div class="container mt-3">
                    ${document.getElementById('printBillContent').innerHTML}
                </div>
            </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.print();
    }
</script>
<script>
    $(document).ready(function () {
        $('#pelangganTable').DataTable(); 
    });
</script>
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