<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::orderBy('id')->get();

        return view('publikasi.index', compact('publikasi'));
    }

    public function create()
    {
        return view('publikasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_katalog' => 'required|string|max:50',
            'judul' => 'required|string|max:255',
            'tanggal_rilis' => 'required|date',
            'frekuensi_terbit' => 'required|in:Bulanan,Triwulanan,Tahunan',
            'bahasa' => 'required|in:Indonesia,Inggris,Indonesia dan Inggris',
            'ukuran_file' => 'required|string|max:20',
            'sampul' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('sampul')) {
            $namaFile = time() . '_' . $request->file('sampul')->getClientOriginalName();
            $request->file('sampul')->move(public_path('images'), $namaFile);
            $validated['sampul'] = $namaFile;
        }

        Publikasi::create($validated);

        return redirect()->route('publikasi.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Publikasi $publikasi)
    {
        return view('publikasi.edit', compact('publikasi'));
    }

    public function update(Request $request, Publikasi $publikasi)
    {
        $validated = $request->validate([
            'nomor_katalog' => 'required|string|max:50',
            'judul' => 'required|string|max:255',
            'tanggal_rilis' => 'required|date',
            'frekuensi_terbit' => 'required|in:Bulanan,Triwulanan,Tahunan',
            'bahasa' => 'required|in:Indonesia,Inggris,Indonesia dan Inggris',
            'ukuran_file' => 'required|string|max:20',
            'sampul_baru' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nomor_katalog' => $validated['nomor_katalog'],
            'judul' => $validated['judul'],
            'tanggal_rilis' => $validated['tanggal_rilis'],
            'frekuensi_terbit' => $validated['frekuensi_terbit'],
            'bahasa' => $validated['bahasa'],
            'ukuran_file' => $validated['ukuran_file'],
        ];

        if ($request->hasFile('sampul_baru')) {
            $namaFileBaru = time() . '_' . $request->file('sampul_baru')->getClientOriginalName();
            $request->file('sampul_baru')->move(public_path('images'), $namaFileBaru);

            if ($publikasi->sampul && file_exists(public_path('images/' . $publikasi->sampul))) {
                unlink(public_path('images/' . $publikasi->sampul));
            }

            $data['sampul'] = $namaFileBaru;
        }

        $publikasi->update($data);

        return redirect()->route('publikasi.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(Publikasi $publikasi)
    {
        if ($publikasi->sampul && file_exists(public_path('images/' . $publikasi->sampul))) {
            unlink(public_path('images/' . $publikasi->sampul));
        }

        $publikasi->delete();

        return redirect()->route('publikasi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
