@extends('layouts.app')

@section('title', 'Ubah Data Publikasi')

@section('content')
<h1 class="text-center mb-4">Formulir Ubah Data Publikasi</h1>

<form action="{{ route('publikasi.update', $publikasi->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nomor_katalog" class="form-label fw-bold">Nomor Katalog :</label>
        <input type="text" id="nomor_katalog" name="nomor_katalog" class="form-control" value="{{ old('nomor_katalog', $publikasi->nomor_katalog) }}" required>
    </div>

    <div class="mb-3">
        <label for="judul" class="form-label fw-bold">Judul :</label>
        <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $publikasi->judul) }}" required>
    </div>

    <div class="mb-3">
        <label for="frekuensi_terbit" class="form-label fw-bold">Frekuensi Terbit :</label>
        <select id="frekuensi_terbit" name="frekuensi_terbit" class="form-select" required>
            <option value="Bulanan" @selected(old('frekuensi_terbit', $publikasi->frekuensi_terbit) == 'Bulanan')>Bulanan</option>
            <option value="Triwulanan" @selected(old('frekuensi_terbit', $publikasi->frekuensi_terbit) == 'Triwulanan')>Triwulanan</option>
            <option value="Tahunan" @selected(old('frekuensi_terbit', $publikasi->frekuensi_terbit) == 'Tahunan')>Tahunan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="bahasa" class="form-label fw-bold">Bahasa :</label>
        <select id="bahasa" name="bahasa" class="form-select" required>
            <option value="Indonesia" @selected(old('bahasa', $publikasi->bahasa) == 'Indonesia')>Indonesia</option>
            <option value="Inggris" @selected(old('bahasa', $publikasi->bahasa) == 'Inggris')>Inggris</option>
            <option value="Indonesia dan Inggris" @selected(old('bahasa', $publikasi->bahasa) == 'Indonesia dan Inggris')>Indonesia dan Inggris</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="tanggal_rilis" class="form-label fw-bold">Tanggal Rilis :</label>
        <input type="date" id="tanggal_rilis" name="tanggal_rilis" class="form-control" value="{{ old('tanggal_rilis', $publikasi->tanggal_rilis) }}" required>
    </div>

    <div class="mb-3">
        <label for="ukuran_file" class="form-label fw-bold">Ukuran File :</label>
        <input type="text" id="ukuran_file" name="ukuran_file" class="form-control" value="{{ old('ukuran_file', $publikasi->ukuran_file) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Sampul Lama :</label><br>
        @if ($publikasi->sampul)
            <img src="/images/{{ $publikasi->sampul }}" alt="Sampul" width="70">
        @else
            No Image
        @endif
    </div>

    <div class="mb-3">
        <label for="sampul_baru" class="form-label fw-bold">Sampul Baru :</label>
        <input type="file" id="sampul_baru" name="sampul_baru" class="form-control" accept=".jpg,.jpeg,.png,.webp">
    </div>

    <button type="submit" class="btn btn-warning text-white">Ubah Data</button>
</form>
@endsection
