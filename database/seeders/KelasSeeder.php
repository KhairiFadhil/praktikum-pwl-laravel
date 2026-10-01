<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['A', 'B', 'C', 'D'] as $nama) {
            Kelas::firstOrCreate(['nama_kelas' => $nama]);
        }
    }
}
