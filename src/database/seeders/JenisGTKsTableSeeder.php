<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisGTKsTableSeeder extends Seeder
{
    public function run()
    {
        $jenisGTKs = [
            'Guru Kelas',
            'Guru Mata Pelajaran',
            'Guru BK',
            'Tata Usaha',
            'Laboran',
            'Pustakawan'
        ];

        foreach ($jenisGTKs as $jenisGTK) {
            DB::table('jenisgtks')->insert([
                'name' => $jenisGTK,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
