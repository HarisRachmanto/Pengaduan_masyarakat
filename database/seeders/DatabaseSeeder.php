<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nama_petugas' => 'ucok',
            'username' => 'petugas',
            'password' => Hash::make('password'),
            'telp' => '082381412',
            'level' => 'petugas'
        ]); 
    }
}

?>