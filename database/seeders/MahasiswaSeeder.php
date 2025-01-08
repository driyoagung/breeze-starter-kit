<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Ali Ahmad',
                'nim' => '1234567890',
                'alamat' => 'Jl. Merdeka No. 1',
                'foto' => 'profil.png',
                'jurusan' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '1234567891',
                'alamat' => 'Jl. Sudirman No. 12',
                'foto' => 'profil.png',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Citra Dewi',
                'nim' => '1234567892',
                'alamat' => 'Jl. Diponegoro No. 25',
                'foto' => 'profil.png',
                'jurusan' => 'Teknik Elektro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Sari',
                'nim' => '1234567893',
                'alamat' => 'Jl. Ahmad Yani No. 34',
                'foto' => 'profil.png',
                'jurusan' => 'Manajemen Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eka Putra',
                'nim' => '1234567894',
                'alamat' => 'Jl. Gajah Mada No. 56',
                'foto' => 'profil.png',
                'jurusan' => 'Teknik Mesin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
