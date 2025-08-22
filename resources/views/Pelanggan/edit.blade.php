
@extends('layouts.template')
@section('content')

<form action="{{ url('/update-pelanggan', $pelanggan->id) }}" method="POST">
    @csrf
    <input type="text" name="name" value="{{ $pelanggan->name }}" required>
    <input type="email" name="email" value="{{ $pelanggan->email }}" required>
    <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" required>
    <button type="submit">Update</button>
</form>

@endsection