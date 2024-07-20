<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create(
            [
                'nim' => '16219281',
                'nama_lengkap' => 'Paul Sesa',
                'tempat_lahir' => 'Sorong',
                'tanggal_lahir' => now(),
                'jenis_kelamin' => 'Pria',
                'jurusan_id' => 1,
                'no_hp' => '082198159714',
                'foto' => '/gambar/mahasiswa/1.jpg',
                'alamat' => 'Jln. P3 Waena',
                'keterangan' => 'Mahasiswa Angakatan 2020',
            ]
        );
    }
}
