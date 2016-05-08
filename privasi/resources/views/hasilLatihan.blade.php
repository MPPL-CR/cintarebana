@extends('template.t_anggota')
@section('content')
<h1>Perkembangan Latihan</h1>
		
<form id="posts-filter" method="get">
	<!--p class="search-box">
		<label class="screen-reader-text" for="post-search-input">Search Posts:</label>
		<input id="post-search-input" name="s" type="search">
		<input id="search-submit" class="button" value="Search Posts" type="submit">
	</p-->
		
	<div class="tablenav top">
		
		<!--div class="alignleft actions">
			<label for="filter-by-date" class="screen-reader-text">Filter by date</label>
			<select name="m" id="filter-by-date">
				<option selected="selected" value="0">All dates</option>
				<option value="201603">March 2016</option>
			</select>
			<label class="screen-reader-text" for="cat">Filter by category</label>
			<select name="cat" id="cat" class="postform">
				<option selected="selected" value="0">All categories</option>
				<option class="level-0" value="1">Uncategorized</option>
			</select>
			<input name="filter_action" id="post-query-submit" class="button" value="Filter" type="submit">		
		</div-->
			
	

		<br class="clear">
	</div>
<table class="wp-list-table widefat fixed striped posts">
	<thead>
	<tr>
		<td id="cb" class="manage-column column-cb check-column">
		<label class="screen-reader-text" for="cb-select-all-1">No.</label>
		
		</td>
		
		<th scope="col" id="author" class="manage-column column-author">NRP</th>
		<th scope="col" id="categories" class="manage-column column-categories">Genre</th>
		<th scope="col" id="tags" class="manage-column column-tags">Tgl Latihan</th>
		<th scope="col" id="tags" class="manage-column column-tags">Tahapan</th>
		
		<th scope="col" id="tags" class="manage-column column-tags">Nilai</th>
		<th scope="col" id="tags" class="manage-column column-tags">Catatan</th>
			</tr>
	</thead>
<?php $i=1; ?>
	@foreach ($result as $anggota)
	<tbody id="the-list">
	<tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized">
		<th scope="row" class="check-column">			
			<label>1. </label>
			<div class="locked-indicator"></div>
		</th>
		
	<td class="author column-author" data-colname="Author">5113100043</td>
		<td class="categories column-categories" data-colname="Categories">
			{{ $anggota->genre }}
		</td>
		<td class="tags column-tags" data-colname="Tags">
			<span aria-hidden="false">{{ $anggota->tanggal }}</span>
		</td>
		<td class="tags column-tags" data-colname="Tags">
			<span aria-hidden="false">{{ $anggota->tahapan }}</span>
		</td>
		
		
		<td class="date column-date" data-colname="Date">
		<abbr title="2016/03/19 7:11:50 pm">{{ $anggota->nilai }}</abbr>
		</td>
		<td class="date column-date" data-colname="Date">
		<abbr title="2016/03/19 7:11:50 pm">{{ $anggota->catatan }}</abbr>
		</td>
		
			
				
</tr>
@endforeach
</tbody>


</table>
	

</form>
@stop