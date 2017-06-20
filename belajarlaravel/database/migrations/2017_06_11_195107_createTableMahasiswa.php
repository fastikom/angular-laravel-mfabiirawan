<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Mahasiswa', function(Blueprint $table){
            $table->increments('st_id');
            $table->char('st_nim', 10)->unique();
            $table->string('st_nama', 150);
            $table->char('st_jurusan', 50);
            $table->string('st_alamat', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
