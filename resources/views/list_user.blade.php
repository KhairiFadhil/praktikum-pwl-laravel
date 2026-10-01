@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <x-user-table :users="$users" />
    </div>
</div>
@endsection
