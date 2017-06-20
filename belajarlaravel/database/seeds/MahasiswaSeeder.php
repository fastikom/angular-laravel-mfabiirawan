<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Mahasiswa')->insert([
        	'st_nim'	=> '2014150154',
        	'st_nama'	=> 'Dian Ariana',
        	'st_jurusan'	=> 'Teknik Informatika',
        	'st_alamat'=> 'Banjarnegara'
        ]);
    }
}
