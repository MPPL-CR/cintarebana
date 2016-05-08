@extends('template.t_admin')
@section('content')
<h1>Penilaian Latihan</h1>
		
<form id="your-profile" action="{{URL::to('/insertPenilaian')}}" method="post" novalidate="novalidate">
{{ csrf_field() }}


<table class="form-table">
	<tbody><tr class="user-user-login-wrap">
		<th><label for="user_login">NRP</label></th>
		<td><input name="NRP" id="user_login"  class="regular-text" type="text"> </td>
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

<tr class="user-first-name-wrap">
	<th><label for="display_name">Tahapan</label></th>
	<td>
		<select name="tahapan" id="display_name" required>
					<option >-Pilih</option>
					<option value="dasar">Dasar</option>
					<option value="menengah">Menengah</option>
					<option value="variasi">Variasi</option>
					
				</select>
	</td>
</tr>
<tr class="user-last-name-wrap">
	<th><label for="last_name">Tanggal</label></th>
	<td><input name="tanggal" id="last_name" class="regular-text" type="date" required></td>
</tr>
<tr class="user-last-name-wrap">
	<th><label for="last_name">Penilaian</label></th>
	<td><input name="nilai" id="last_name" class="regular-text" type="number" required></td>
</tr>
<tr class="user-last-name-wrap">
	<th><label for="last_name">Catatan</label></th>
	<td><textarea name="catatan" class="regular-text" required></textarea></td>
</tr>



</tbody></table>
<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Selesai" type="submit"></p>
</form>

	</div>
@stop