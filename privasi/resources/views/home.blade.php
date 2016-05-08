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
       
        <p>SI-Anggota UKM  merupakan sebuah sistem untuk memanajemen data anggota UKM. Anggota bisa melihat data diri, memilih latihan yang diinginkan dan melihat perkembangan dari hasil latihan.</p>


        <hr>


      </div>

      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-4">
        <div class="sidebar">

          <!-- Subscription widget -->
          <div class="card-panel">
            <div class="row">
              <form class="col-md-12" method="post" action="{{URL::to('/login')}}">
				{{ csrf_field() }}
                <h5>Login</h5>
                 
                <br>
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  {!! Form::text('NRP',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_prefix">NRP</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">https</i>
                  {!! Form::password('passwd',null,['class'=>'validate'],['id'=>'icon_prefix']) !!}
                  <label for="icon_telephone">Password</label>
                </div>
				 <div class="text-center">
                <button type="submit" class="btn btn-info waves-effect waves-light">Login</button>
				
              </div>
              </form>
             
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