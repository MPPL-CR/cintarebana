@extends('template.t_index')
@section('content')
	
<div class="row">

      <!-- Blog Post Content Column -->
      <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        
		<img class="img-responsive " src="{{asset('assets/img/header-1.png')}}" alt="">
		

        <!-- Author -->
        <!--p class="lead">
          by <a href="#">MD Bootstrap</a>
        </p-->

        <hr>

        <!-- Date/Time -->
        <p><h4><strong>SI-Anggota UKM</strong></h4></p>

        <hr>

        <!-- Preview Image -->
        <!--img class="img-responsive z-depth-2" src="img/project1.png" alt=""-->

        <hr>

        <!-- Post Content -->
       
        <p>Did you know that a strong brand is absolutely essential for generating sales and growth on Social Media? You may not have given a lot of importance to your brand identity yet, but you surely have one. Let us take care of your branding and visibility both in online and offline world.</p>


        <hr>


      </div>

      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-4">
        <div class="sidebar">

          <!-- Subscription widget -->
          <div class="card-panel">
            <div class="row">
<form class="col-md-12" method="post" action="{{URL::to('/regis_act')}}">
{{ csrf_field() }}
              
                <h5>Form Registrasi Anggota</h5>
                
                <br>
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
					{!! Form::text('nama',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Nama Lengkap</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
				  {!! Form::text('NRP',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">NRP</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('jurusan',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Jurusan</label>
                </div>
			
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('tanggal',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Tgl Lahir(10-12-1995)</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                   {!! Form::text('jenkel',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Jenis Kelamin</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('email',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Email</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('telepon',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">No.Hp</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('alamatsurabaya',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Alamat Surabaya</label>
                </div>
				<div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('alamatasli',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">Alamat Asal</label>
                </div>
				
                <div class="input-field">
                  <i class="material-icons prefix">https</i>
                  {!! Form::password('passwd',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_telephone">Password</label>
                </div>
				<div class="text-center">
                <button type="submit" class="btn btn-info waves-effect waves-light">Registrasi</button>
				
              </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          <!--/.Subscription widget -->
          <br>
          <!-- Category widget -->
          <!--h4>Categories</h4>
          <div class="collection ">
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item active">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
          </div-->

        </div>
      </div>

    </div>
    <!-- /.row -->

    <hr>
@stop