<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswas = [
            [
                'username' => 'mahasiswa1',
                'email' => 'mahasiswa1@example.com',
                'password' => bcrypt('password1'),
                'is_admin' => false,
            ],
            [
                'username' => 'mahasiswa2',
                'email' => 'mahasiswa2@example.com',
                'password' => bcrypt('password2'),
                'is_admin' => false,
            ],
            // Tambahkan data mahasiswa lainnya sesuai kebutuhan
        ];

        foreach ($mahasiswas as $mahasiswa) {
            User::create([
                'username' => $mahasiswa['username'],
                'email' => $mahasiswa['email'],
                'password' => $mahasiswa['password'],
                'is_admin' => $mahasiswa['is_admin'],
            ]);
        }
    }
}
