@extends('layouts.app')

@section('title', 'Tambah Publikasi')

@section('content')
<h1 class="text-center mb-4">Tambah Publikasi</h1>

<form action="{{ route('publikasi.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded">
    @csrf

    <div class="mb-3">
        <label for="nomor_katalog" class="form-label fw-bold">Nomor Katalog :</label>
        <input type="text" id="nomor_katalog" name="nomor_katalog" class="form-control @error('nomor_katalog') is-invalid @enderror" value="{{ old('nomor_katalog') }}" required>
        @error('nomor_katalog')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="judul" class="form-label fw-bold">Judul :</label>
        <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
        @error('judul')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="frekuensi_terbit" class="form-label fw-bold">Frekuensi Terbit :</label>
        <select id="frekuensi_terbit" name="frekuensi_terbit" class="form-select @error('frekuensi_terbit') is-invalid @enderror" required>
            <option value="">-- Pilih Frekuensi --</option>
            <option value="Bulanan" @selected(old('frekuensi_terbit') == 'Bulanan')>Bulanan</option>
            <option value="Triwulanan" @selected(old('frekuensi_terbit') == 'Triwulanan')>Triwulanan</option>
            <option value="Tahunan" @selected(old('frekuensi_terbit') == 'Tahunan')>Tahunan</option>
        </select>
        @error('frekuensi_terbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="bahasa" class="form-label fw-bold">Bahasa :</label>
        <select id="bahasa" name="bahasa" class="form-select @error('bahasa') is-invalid @enderror" required>
            <option value="">-- Pilih Bahasa --</option>
            <option value="Indonesia" @selected(old('bahasa') == 'Indonesia')>Indonesia</option>
            <option value="Inggris" @selected(old('bahasa') == 'Inggris')>Inggris</option>
            <option value="Indonesia dan Inggris" @selected(old('bahasa') == 'Indonesia dan Inggris')>Indonesia dan Inggris</option>
        </select>
        @error('bahasa')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="tanggal_rilis" class="form-label fw-bold">Tanggal Rilis :</label>
        <input type="date" id="tanggal_rilis" name="tanggal_rilis" class="form-control @error('tanggal_rilis') is-invalid @enderror" value="{{ old('tanggal_rilis') }}" required>
        @error('tanggal_rilis')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="ukuran_file" class="form-label fw-bold">Ukuran File :</label>
        <input type="text" id="ukuran_file" name="ukuran_file" class="form-control @error('ukuran_file') is-invalid @enderror" value="{{ old('ukuran_file') }}" required>
        @error('ukuran_file')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="sampul" class="form-label fw-bold">Sampul :</label>
        <input type="file" id="sampul" name="sampul" class="form-control @error('sampul') is-invalid @enderror" accept=".jpg,.jpeg,.png,.webp" required>
        @error('sampul')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <button type="submit" class="btn btn-warning text-white">Tambah</button>
</form>
@endsection
