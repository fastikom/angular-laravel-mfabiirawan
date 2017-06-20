<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa as Model;

class Mahasiswa extends Controller
{
    public function fetch()
	{
		return response()->json(Model::all());
	}
}
