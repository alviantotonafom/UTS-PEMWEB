<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GurudanTenagaKependidikansTableSeeder extends Seeder
{
    public function run()
    {
        $genders = ['Laki-laki', 'Perempuan'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('gurudantenagakependidikans')->insert([
                'fullname' => 'Nama Lengkap ' . $i,
                'dateofbirth' => Carbon::now()->subYears(rand(20, 60))->format('Y-m-d'),
                'gender' => $genders[array_rand($genders)],
                'address' => 'Alamat ' . $i,
                'phone' => '08' . rand(1000000000, 9999999999),
                'email' => 'email' . $i . '@example.com',
                'hiredate' => Carbon::now()->subYears(rand(1, 20))->format('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
