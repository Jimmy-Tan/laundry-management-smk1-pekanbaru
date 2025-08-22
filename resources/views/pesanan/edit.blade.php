<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('pesanan.update', ':id') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">Pilih Jenis Cucian</label>
                            <select class="form-control @error('jenis_cucian') is-invalid @enderror" name="jenis_cucian">
                            <option value='curtain withoutring'>CURTAIN / GORDEN TANPA RING - Rp 15.000 Per Item</option>
        <option value='curtain with ring'>CURTAIN / GORDEN DENGAN RING - Rp 25.000 Per Item</option>
        <option value='bed cover single'>BED COVER SINGLE - Rp 35.000 Per Item</option>
        <option value='bed cover double'>BED COVER DOUBLE - Rp 50.000 Per Item</option>
        <option value='towel_ biasa'>TOWEL / HANDUK BIASA - Rp 10.000 Per Item</option>
        <option value='towel jumbo'>TOWEL / HANDUK UKURAN JUMBO - Rp 15.000 Per Item</option>
        <option value='blanket single'>BLANKET / SELIMUT SINGLE - Rp 10.000 Per Item</option>
        <option value='blanket double'>BLANKET / SELIMUT DOUBLE - Rp 15.000 Per Item</option>
        <option value='table clothkecil'>TABLE CLOTH / ALAS MEJA KECIL - Rp 5.000 Per Item</option>
        <option value='table cloth besar'>TABLE CLOTH / ALAS MEJA BESAR - Rp 15.000 Per Item</option>
        <option value='sheet single'>SHEET / ALAS KASUR (SINGLE) - Rp. 7.000 Per Item</option>
        <option value='sheet rimple'>SHEET / ALAS KASUR RIMPLE - Rp. 20.000 Per Item</option>
        <option value='sheet double'>SHEET / ALAS KASUR (DOUBLE) - Rp. 10.000 Per Item</option>
        <option value='pillow case'>PILLOW CASE - Rp . 2.000 Per Item</option>
        <option value='washing drying pressing'>WASHING, DRYING, PRESSING AND FOLDING - Rp 7.000 Per KG</option>
        <option value='washing drying folding'>WASHING, DRYING, FOLDING - Rp 5.000 Per KG</option>
        <option value='pressing folding'>PRESSING , FOLDING - Rp 4.000 Per KG</option>
                            </select>
                            @error('jenis_cucian')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Pilih Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                            <option value='Belum Selesai'>Belum Selesai</option>
                                        <option value='Selesai'>Selesai</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Pemesanan</label>
                            <input type="date" class="form-control @error('tanggal_pemesanan') is-invalid @enderror"
                                name="tanggal_pemesanan">
                            @error('tanggal_pemesanan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Berat</label>
                            <input type="text" class="form-control @error('berat') is-invalid @enderror" name="berat">
                            @error('berat')
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
</div>