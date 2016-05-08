<?php namespace App\Http\Controllers;

use Input;
use Request;
use App\Http\Controllers\Controller;
use DB,Session;

class AnggotaController extends Controller {
	public function index(){
		if (Session::has('Anggota')) {
       		return view('dasboardAnggota');
		}else{
			return redirect('/');
		}
	}
	public function editProfil(){
		if (Session::has('Anggota')) {
			$id=Session::get('Anggota');
			$result = DB::table('anggota')
	            ->select(DB::raw("*"))
				->where('NRP','=',$id)
	            ->get();
	       	return view('editProfil',compact('result'));
	    }
	    else{
	    	return redirect('/');
	     }
	}
	public function updateProfil(){
		if (Session::has('Anggota')) {
			$id=Session::get('Anggota');
			$data = array(
					'NRP'			=> Request::get('NRP'),
					'nama'			=> Request::get('nama'),
					'jurusan' 		=> Request::get('jurusan'),
					'tanggal' 		=> Request::get('tanggal'),
					'telepon' 		=> Request::get('telepon'),
					'email' 		=> Request::get('email'),
					'jeniskelamin' 	=> Request::get('jenkel'),
					'alamatasli' 	=> Request::get('alamatasli'),
					'alamatsurabaya'=> Request::get('alamatsurabaya'),
					'passwd'		=> MD5(Request::get('passwd'))
					
					);
					
				$ch = DB::table('anggota')->where('NRP','=',$id)->update($data);
				return redirect('/editProfil');
		}
		else{
			redirect('/');
		}
	}
	public function pilihGenre(){
		if (Session::has('Anggota')) {		
		   return view('pilihGenre');
		}
		else{
			return redirect('/');
		}
	}
	public function hasilLatihan(){
		if (Session::has('Anggota')) {
			$data=array(
				'statusbayar' => 'Lunas'
			);
			$id=Session::get('Anggota');
			$result = DB::table('nilai')
	            ->select(DB::raw("*"))
				->where('NRP','=',$id)
	            ->get();
			
		   return view('hasilLatihan',compact('result'));
		}
		else{
			return redirect('/');
		}
	}
	public function konfirmasi($id){
		if (Session::has('Anggota')) {
			$data=array(
				'statusbayar' => 'Lunas'
			);
			DB::table('anggota')->where('ID','=',$id)->update($data);
		    return redirect('validasi');
		}
		else{
			return redirect('/');
		}
	}
	
	public function genre()
	{
		if (Session::has('Anggota')) {
	       	$id=Session::get('Anggota');
			$data = array(
				'NRP'			=> $id,
				'genre1'			=> Request::get('genre1'),
				'genre2' 		=> Request::get('genre2'),
				
				
				);
				
			$ch = DB::table('genre')->insert($data);
			return redirect('pilihGenre');
		
		}else{
			return redirect('/');
		}	
	}
}
?>