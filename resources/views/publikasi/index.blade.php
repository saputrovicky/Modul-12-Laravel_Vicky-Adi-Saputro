@extends('layouts.app')

@section('title', 'Daftar Publikasi')

@section('content')
<h1 class="text-center mb-4">Daftar Publikasi BPS Provinsi Daerah Istimewa Yogyakarta</h1>

<div class="table-responsive">
    <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-warning text-center align-middle">
            <tr class="align-middle">
                <th>No</th>
                <th>Judul</th>
                <th>Nomor Katalog</th>
                <th>Tanggal Rilis</th>
                <th>Frekuensi Terbit</th>
                <th>Bahasa</th>
                <th>Ukuran File</th>
                <th>Sampul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($publikasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->nomor_katalog }}</td>
                    <td>{{ $item->tanggal_rilis }}</td>
                    <td>{{ $item->frekuensi_terbit }}</td>
                    <td>{{ $item->bahasa }}</td>
                    <td>{{ $item->ukuran_file }}</td>
                    <td>
                        @if ($item->sampul)
                            <img src="/images/{{ $item->sampul }}" alt="{{ $item->judul }}" width="70">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('publikasi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('publikasi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus publikasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">Belum ada data publikasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
