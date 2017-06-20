<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected	$table		= 'mahasiswa';
	protected 	$primaryKey	= 'st_id';
	protected	$fillable	= ['st_nim', 'st_nama', 'st_jurusan', 'st_alamat'];
	public 		$timestamps	= false;
}
