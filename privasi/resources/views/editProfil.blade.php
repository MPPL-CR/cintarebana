@extends('template.t_anggota')
@section('content')
<h1>Edit Profile</h1>
<form id="your-profile" action="{{URL::to('/updateProfil')}}" method="post" novalidate="novalidate">
{{ csrf_field() }}
@foreach ($result as $anggota)
<table class="form-table">
	<tbody><tr class="user-user-login-wrap">
		<th><label for="user_login">Nama</label></th>
		<td><input name="nama" id="user_login"  class="regular-text" type="text" value="<?php {{ echo $anggota->nama; }} ?>"> </td>
	</tr>


<tr class="user-first-name-wrap">
	<th><label for="first_name">NRP</label></th>
	<td><input name="NRP" id="first_name" class="regular-text" type="text" value="<?php {{ echo $anggota->NRP; }} ?>"></td>
</tr>

<tr class="user-last-name-wrap">
	<th><label for="last_name">Jurusan</label></th>
	<td><input name="jurusan" id="last_name" class="regular-text" type="text" value="<?php {{ echo $anggota->jurusan; }} ?>"></td>
</tr>


<tr class="user-nickname-wrap">
	<th><label for="nickname">Tgl Lahir</label></th>
	<td><input name="tanggal" id="nickname"  class="regular-text" type="date" value="<?php {{ echo $anggota->tanggal; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Alamat Asal</label></th>
	<td><input name="alamatasli" id="nickname"  class="regular-text" type="text" value="<?php {{ echo $anggota->alamatasli; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Alamat Surabaya</label></th>
	<td><input name="alamatsurabaya" id="nickname"  class="regular-text" type="text" value="<?php {{ echo $anggota->alamatsurabaya; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Email</label></th>
	<td><input name="email" id="nickname"  class="regular-text" type="text" value="<?php {{ echo $anggota->email; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">No.Hp</label></th>
	<td><input name="telepon" id="nickname"  class="regular-text" type="text" value="<?php {{ echo $anggota->telepon; }} ?>"></td>
</tr>

<tr class="user-nickname-wrap">
	<th><label for="nickname">Keanggotaan</label></th>
	<td><input name="nickname" id="nickname"  disabled class="regular-text" type="text" value="<?php {{ echo $anggota->keanggotaan; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Status Keanggotaan</label></th>
	<td><input name="nickname" id="nickname"   disabled class="regular-text" type="text" value="<?php {{ echo $anggota->status; }} ?>"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Password</label></th>
	<td><input name="passwd" id="nickname"  class="regular-text" type="password"></td>
</tr>
</tbody></table>


	

@endforeach
<input name="action" value="update" type="hidden">
<input name="user_id" id="user_id" value="1" type="hidden">

<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Update Profile" type="submit"></p>
</form>

	</div>	
@stop