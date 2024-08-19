<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'id' => '123',
            'nama' => 'Prayoga',
            'alamat' => 'Jl. Raya perning'
        ]);
    }
}
