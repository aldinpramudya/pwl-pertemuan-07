<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'Nim'=> 2141720233,
            'Nama'=> 'Aldin Ariel Pramudya',
            'Kelas'=> '2G',
            'Jurusan'=> 'Teknologi Informasi',
            'No_Handphone'=> '08597654738'
        ]);
    }
}
