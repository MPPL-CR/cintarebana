@extends('template.t_admin')
@section('content')
<h1>Buat Jadwal Latihan</h1>
<form id="your-profile" action="{{URL::to('/insertJadwal')}}" method="post" novalidate="novalidate">
{{ csrf_field() }}


<table class="form-table">
	<tbody><tr class="user-user-login-wrap">
		<th><label for="user_login">Kelompok</label></th>
		<td><input name="kelompok" id="user_login"  class="regular-text" type="text"> </td>
	</tr>


<tr class="user-first-name-wrap">
	<th><label for="display_name">Genre</label></th>
	<td>
		<select name="genre" id="display_name">
					<option >-Pilih</option>
					<option value="1">Banjari Laki-laki</option>
					<option value="2">Banjari Perempuan</option>
					<option value="3">Vokal Laki-laki</option>
					<option value="4">Vokal Perempuan</option>
				</select>
	</td>
</tr>

<tr class="user-last-name-wrap">
	<th><label for="last_name">Mentor</label></th>
	<td><input name="mentor" id="last_name" class="regular-text" type="text"></td>
</tr>

<tr class="user-nickname-wrap">
	<th><label for="nickname">No.Hp Mentor</label></th>
	<td><input name="hp" id="nickname" class="regular-text" type="text"></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Jadwal Latihan</label></th>
	<td><input name="jadwal" id="nickname" class="regular-text" type="text"></td>
</tr>

</tbody></table>

<h3>Anggota</h3>

<table class="form-table">
<tbody>
<?php for($i=0 ; $i<5 ; $i++) { ?>
<tr class="user-email-wrap">
	<th><label for="email">NRP</label></th>
	<td><input name="nrp[]" id="email"  class="regular-text ltr" type="email">
		</td>
</tr>
<?php } ?>

</tbody>

</table>

<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Tambah Anggota" type="submit"></p>
<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Selesai" type="submit"></p>
</form>
</div>	
@stop