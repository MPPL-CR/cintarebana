@extends('template.t_admin')
@section('content')

<h1>Data Anggota </h1>
		
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
		<th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><Label>Nama</Label></th>
		<th scope="col" id="author" class="manage-column column-author">NRP</th>
		<th scope="col" id="categories" class="manage-column column-categories">Jurusan</th>
		<th scope="col" id="tags" class="manage-column column-tags">HP</th>
		
		<th scope="col" id="date" class="manage-column column-date sortable asc">
		<span>Kota Asal</span><span class="sorting-indicator"></span></th>
			</tr>
	</thead>

	<tbody id="the-list">
	<?php $i=1; ?>
	@foreach ($result as $anggota)
	<tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized">
		<th scope="row" class="check-column">			
			<label><?php echo $i++; ?>. </label>
			<div class="locked-indicator"></div>
		</th>
		<td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
		<strong>{{ $anggota->nama }}</strong>
			
			<div class="#"><span class="edit">
			<a href="#" title="Edit this item">Edit</a> | </span>
			<span class="trash"><a class="submitdelete" title="Move this item to the Trash" href="{{URL::to('/hapus')}}/{{ $anggota->ID }}">Hapus</a> | </span>
			<span class="view"><a href="#" title="View “Hello world!”" rel="permalink">Lihat</a></span>
		</div>
		<button type="button" class="toggle-row">
		<span class="screen-reader-text">Show more details</span></button>
	</td>
	<td class="author column-author" data-colname="Author">{{ $anggota->NRP }}</td>
		<td class="categories column-categories" data-colname="Categories">
			{{ $anggota->jurusan }}
		</td>
		<td class="tags column-tags" data-colname="Tags">
			<span aria-hidden="false">{{ $anggota->telepon }}</span>
		</td>
		
		<td class="date column-date" data-colname="Date">
		<abbr title="2016/03/19 7:11:50 pm">{{ $anggota->alamatasli }}</abbr>
		</td>
		<td class="tie_post_views column-tie_post_views" ></td>		
</tr>
@endforeach
</tbody>


</table>
	

</form>

	</div>	
@stop