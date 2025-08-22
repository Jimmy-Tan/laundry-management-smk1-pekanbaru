{{-- resources/views/auth/register_customer.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Registration</h1>
    <form method="POST" action="{{ route('customer.register') }}">
        @csrf
        <div>
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone_number" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
<a href="{{ route('customer.register') }}">Customer Register</a>
@endsection