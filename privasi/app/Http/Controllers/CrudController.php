<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Input;
use DB;
use Redirect;

class CrudController extends Controller
{
    public function tambahdata(){
		$data= array(
		'nama' => Request::get('nama'),
		'alamat' => Request::get('alamat'),
		'kelas' => Request::get('kelas'),
		
		);
		
		DB::table('siswa')->insert($data);
		return redirect::to('/read')->with('message','data berhasil ditambahkan');
	}
}
