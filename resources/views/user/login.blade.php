@extends('app')
@section('content')

<style>
    body {
        background-color: #aaf0e2; /* Warna aqua muda */
    }

    .registration-box {
        background-color: #fff; /* Warna latar belakang putih */
        border-radius: 8px;
        padding: 40px;
        margin-top: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk memberikan kedalaman */
        display: flex; /* Menentukan layout menjadi flex */
        align-items: center; /* Pusatkan elemen secara vertikal */
        justify-content: space-between; /* Beri jarak di sekitar elemen */
    }

    .registration-box img {
        width: auto; /* Lebar gambar sesuai dengan ukuran aslinya */
        height: auto; /* Tinggi gambar menyesuaikan lebar */
        max-width: 50%; /* Maksimum lebar gambar */
        margin-right: 20px; /* Jarak antara gambar dan formulir */
    }

    .registration-box form {
        flex: 1; /* Membuat formulir memenuhi sisa ruang */
    }

    .registration-box h2 {
        color: #333; /* Warna judul "Daftar Akun" */
    }
</style>

<div class="row">
    <div class="col-md-6 mx-auto registration-box">
        @if($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        
        <img src="https://img.freepik.com/free-vector/self-service-laundry-equipment-accessories-cartoon-background-composition-with-washer-folded-clean-bedding-hanging-shirts-vector-illustration_1284-67589.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699747200&semt=ais" alt="Daftar Akun Image">

       
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <h2>Login</h2>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
           
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
