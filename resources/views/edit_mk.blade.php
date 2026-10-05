@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Edit Mata Kuliah</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}">
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-secondary">Lihat Daftar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection