<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Input;
use DB;
use Redirect;
use App\User;
use Auth,Session;


class HomeController extends Controller {
	
	public function index()
	{
		return view('home');
	}
	public function registrasi()
	{
		return view('registrasi');
	}
	public function jadwal()
	{
		 $result = DB::table('j_kelompok')
            ->select(DB::raw("*"))->get();
		return view('jadwal',compact('result'));
	}
	public function lihatKelompok($id){
		$kelompok=$id;
		 $result = DB::table('anggota_kelompok')
            ->select(DB::raw("*"))
            ->where('kelompok' , 'LIKE', '%'.$id.'%')
            ->get();
		return view('anggotaKelompok',compact('result','kelompok'));
	}
	public function cari()
	{
		return view('cari');
	}
	public function hasilCari()
	{
		return view('hasilCari');
	}
	
	public function validasi(){
		$anggotas=anggota::all();
		$result = DB::table('anggota')
            ->select(DB::raw("*"))
            ->where('statusbayar' ,'=', 'BelumLunas')
            ->get();
       	return view('validasi',compact('result'));
	}
    
    public function search(){
	   	$nama = Request::get('nama');
		
        $result = DB::table('anggota')
            ->select(DB::raw("*"))
            ->where('nama' , 'LIKE', '%'.Request::get('nama').'%')
            ->get();
        return view('hasilCari',compact('result'));
    }

	public function create()
	{
	   return view('registrasi');
	}
	
	public function regis_act()
	{
		
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
				
			$ch = DB::table('anggota')->insert($data);
			return redirect::to('/');
		
	}

	
	public function show($id)
	{
		$anggota=anggota::find($id);
 		return view('show',compact('anggota'));	
 	}

 	public function edit($id)
	{
	   $anggota=anggota::find($id);
	   return view('edit',compact('anggota'));
	}

	public function update($id)
	{
 		$anggotaupdate=Request::all();	
		$anggota=anggota::find($id);
		$data = array(
				'NRP'				=> $anggotaupdate['NRP'],
				'nama'				=> $anggotaupdate['nama'],
				'jurusan' 			=> $anggotaupdate['jurusan'],
				'tanggal'			=> $anggotaupdate['tanggal'],
				'telepon' 			=> $anggotaupdate['telepon'],
				'email'				=> $anggotaupdate['email'],
				'jeniskelamin' 		=> $anggotaupdate['jeniskelamin'],
				'alamatasli'		=> $anggotaupdate['alamatasli'],
				'alamatsurabaya' 	=> $anggotaupdate['alamatsurabaya'],
				'keahlian' 			=> $anggotaupdate['keahlian'],
				'status'			=> $anggotaupdate['status'],
				'statusbayar'		=> $anggotaupdate['statusbayar'],
				);
		DB::table('anggota')
            ->where('ID', $id)
            ->update($data);
		return redirect('anggotas');
	}

	public function destroy($id)
	{
	   anggota::where('ID',$id)->delete();
	   return redirect('anggotas');
	}
	public function login()
	{
		
		$nrp=Request::get('NRP');
		
		$passwd=MD5(Request::get('passwd'));
		$cek=DB::table('anggota')
            ->Where(function ($query) {
                $query->where('NRP','=',Request::get('NRP'))
                      ->where('passwd','=',MD5(Request::get('passwd')));
            })
            ->first();
		
		if($cek){
			$user= $cek->keanggotaan;
			if($user=="Anggota"){
				Session::put('Anggota', $nrp);
			 return redirect('/anggota');
			}else{
				Session::put('Admin', $nrp);
				return redirect('/admin');
			}
			
			//echo $cek->passwd;
		}else{
			
			return redirect('/');
		}
	}
	public function logout(){
		Session::flush();
		return redirect('/');
	}
	
}
