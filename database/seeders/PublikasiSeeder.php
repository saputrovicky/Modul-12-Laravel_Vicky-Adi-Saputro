<?php

namespace Database\Seeders;

use App\Models\Publikasi;
use Illuminate\Database\Seeder;

class PublikasiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Direktori Perusahaan Pertanian (DPP) Provinsi Daerah Istimewa Yogyakarta 2026',
                'nomor_katalog' => '130509234',
                'tanggal_rilis' => '2026-03-09',
                'frekuensi_terbit' => 'Tahunan',
                'bahasa' => 'Indonesia',
                'ukuran_file' => '16.72 MB',
                'sampul' => 'cover1.webp',
            ],
            [
                'judul' => 'Provinsi DI Yogyakarta Dalam Angka 2026',
                'nomor_katalog' => '110200134',
                'tanggal_rilis' => '2026-02-27',
                'frekuensi_terbit' => 'Tahunan',
                'bahasa' => 'Indonesia dan Inggris',
                'ukuran_file' => '17.7 MB',
                'sampul' => 'cover2.webp',
            ],
            [
                'judul' => 'Analisis Hasil Survei Kebutuhan Data BPS Provinsi Daerah Istimewa Yogyakarta 2026',
                'nomor_katalog' => '139901334',
                'tanggal_rilis' => '2026-01-30',
                'frekuensi_terbit' => 'Tahunan',
                'bahasa' => 'Indonesia',
                'ukuran_file' => '6.95 MB',
                'sampul' => 'cover3.webp',
            ],
            [
                'judul' => 'Analisis Indikator Makro Sosial Ekonomi Daerah Istimewa Yogyakarta Triwulan III-2025',
                'nomor_katalog' => '310204634',
                'tanggal_rilis' => '2025-12-31',
                'frekuensi_terbit' => 'Triwulanan',
                'bahasa' => 'Indonesia',
                'ukuran_file' => '15.69 MB',
                'sampul' => 'cover4.webp',
            ],
        ];

        foreach ($data as $row) {
            Publikasi::create($row);
        }
    }
}
