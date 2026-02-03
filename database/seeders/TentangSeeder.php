<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tentang::create([
            'deskripsi_aplikasi' => 'Aplikasi PPDB SMK Negeri 9 Malang Adalah Platform yang dihhususkan saat pendaftaran',
            'versi_aplikasi' => '1.0.0',
            'tanggal_dibuat' => '2028-01-01',
        ]);
    }
}
