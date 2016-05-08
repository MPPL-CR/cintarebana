<?php namespace App\Http\Controllers;

use Input;
use Request;
use App\Http\Controllers\Controller;
use DB,Session;

class AdminController extends Controller {
	public function index(){
		if (Session::has('Admin')){
			return view('dasboardAdmin');
		}
		else{
			return redirect('/');
		}   	
	}
	public function kelola(){
		if (Session::has('Admin')) {
			$result = DB::table('anggota')
	            ->select(DB::raw("*"))
	            ->get();
       
       		return view('kelola',compact('result'));
       }
       else{
       		return redirect('/');
       }
	}
	public function validasi(){
		if (Session::has('Admin')) {
			$result = DB::table('anggota')
	            ->select(DB::raw("*"))
	            ->where('statusbayar','<>', 'Lunas' )
	            ->get();
	       
	       	return view('validasi',compact('result'));
	    }
	    else{
	    	return redirect('/');
	    }
	}
	public function editProfil($id){
		if (Session::has('Admin')) {
			$result = DB::table('anggota')
	            ->select(DB::raw("*"))
				->where('NRP','=',$id)
	            ->get();
	       
	       	return view('editAdmin',compact('result'));
	    }
	    else{
	    	return redirect ('/');
	    }
	}
	public function lihatProfil($id){
		if (Session::has('Admin')) {
			
			$result = DB::table('anggota')
	            ->select(DB::raw("*"))
				->where('NRP','=',$id)
	            ->get();
	       	return view('lihatProfil',compact('result'));
	    }
	    else{
	    	return redirect('/');
	     }
	}
	public function updateProfil(){
		if (Session::has('Admin')) {
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
					'passwd'		=> MD5(Request::get('passwd')),
					'keanggotaan'	=> Request::get('keanggotaan'),
					'status'		=> Request::get('status')
					
					);
					
				$ch = DB::table('anggota')->where('NRP','=',$id)->update($data);
				return redirect('/kelola');
		}
		else{
			return redirect('/');
		}
	}
	public function hapus($id){
		if (Session::has('Admin')) {
			DB::table('anggota')->where('NRP','=',$id)->delete();
		   return redirect('validasi');
		}
		else{
			return redirect('/');
		}
	}
	public function konfirmasi($id){
		if (Session::has('Admin')) {
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
	public function createJadwal(){
		if (Session::has('Admin')) {
	       	return view('createJadwal');
	    }
	    else{
	    	return redirect('/');	    }
	}
	public function penilaian(){
		if (Session::has('Admin')) {
	       	return view('penilaian');
	    }
	    else{
	    	return redirect('/');
	    }
	}
	public function insertPenilaian(){
		if (Session::has('Admin')) {
    
       	$data = array(
				'NRP'			=> Request::get('NRP'),
				'genre'			=> Request::get('genre'),
				'tahapan'		=> Request::get('tahapan'),
				'tanggal'		=> Request::get('tanggal'),
				'nilai' 		=> Request::get('nilai'),
				'catatan' 		=> Request::get('catatan')
				
				
				);
				
			$ch = DB::table('nilai')->insert($data);
			return redirect('penilaian');
		
		}else{
			return redirect('/');
		}
		
	}
	public function insertJadwal(){
		if (Session::has('Admin')) {
		$kelompok=Request::get('kelompok');
       	$data = array(
				'nama_kelompok'	=> Request::get('kelompok'),
				'genre'			=> Request::get('genre'),
				'mentor'		=> Request::get('mentor'),
				'hp'			=> Request::get('hp'),
				'jadwal' 		=> Request::get('jadwal')
				
				
				
				);
			DB::table('j_kelompok')->insert($data);
			$anggota=Request::get('nrp');
		
			foreach($anggota as $nrp){
				
				 DB::insert('insert into anggota_kelompok (kelompok, NRP) values (?,?)', [$kelompok, $nrp]);
			}
				
			
			return redirect('createJadwal');
		
		}else{
			return redirect('/');
		}
		
	}
}
?>