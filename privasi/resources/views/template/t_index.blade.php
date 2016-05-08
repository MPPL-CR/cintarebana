<!DOCTYPE html>
<html>
 <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI-Anggota UKM</title>

  <!-- Material Design Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <!-- Material Design Bootstrap -->
  <link href="{{asset('assets/css/materialize.css')}}" rel="stylesheet">
	
  <!-- Template style -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- Material Design Bootstrap -->
  <script type="text/javascript" src="{{asset('assets/js/materialize.js')}}"></script>
  

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar z-depth-2 info-color">
    <div class="container ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand waves-effect waves-light" href="{{URL::to('/')}}">Home</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{URL::to('/registrasi')}}" class="waves-effect waves-light">Registrasi <span class="sr-only">(current)</span></a>
          </li>
		  <li><a href="{{URL::to('/jadwal')}}" class="waves-effect waves-light">Jadwal <span class="sr-only">(current)</span></a>
          </li>
		  <li><a href="{{URL::to('/cari')}}" class="waves-effect waves-light">Cari Data Anggota <span class="sr-only">(current)</span></a>
          </li>
          <!--li class="dropdown">
            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">List (click to expand) <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://mdbootstrap.com/product/magic-portfolio-for-video-maker/">Video Maker</a>
              </li>
              <li><a href="http://mdbootstrap.com/material-design-for-bootstrap/">Material Design for Bootstrap</a>
              </li>
              <li><a href="http://mdbootstrap.com/product/magic-portfolio-for-creative-agency">Creative Agency</a>
              </li>
              <li><a href="http://mdbootstrap.com/product/magic-portfolio-photographer">Photographer Portfolio</a>
              </li>
              <li class="divider"></li>
              <li><a href="#footer">Footer</a>
              </li>
            </ul>
          </li-->
        </ul>
        <form class="navbar-form navbar-right waves-effect waves-light" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="min-height:380px;">
	@yield('content')

  </div>
  <!-- /.container -->



  <!-- Footer -->
  <footer class="page-footer info-color darken-1" if="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <p class="white-text center-on-small-only">GET STARTED</p>
          <p class="white-text center-on-small-only">Register for free and start to create amazing things.</p>
          <!--a href="http://mdbootstrap.com/getting-started/" class="btn btn-danger waves-effect waves-light">Get started!</a-->

        </div>
        <hr class="hidden-lg hidden-md">

        <div class="col-md-2">
          <p class="white-text center-on-small-only">USEFUL LINKS</p>
          <ul>
            <li><a href="#" data-toggle="modal" data-target="#myModal" class="grey-text text-lighten-3" href="#!">Contact us</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="#" target="_blank">About SIAUKM</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="#" target="_blank">Support</a>
            </li>
            


          </ul>
        </div>
        <hr class="hidden-lg hidden-md">

        <div class="col-md-3 text-center">
          <p class="white-text text-center"> SOCIAL MEDIA</p>
          <a target="_blank" href="#" class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
          <a target="_blank" href="#" class="btn-floating btn-large tw-bg waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
          <a target="_blank" href="#" class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="col-md-10 col-md-offset-1"> © 2016 Copyright <a href="http://www.cintarebana.its.ac.id">cintarebana.its.ac.id </a>
        </div>
      </div>
    </div>
  </footer>



  <!-- SCRIPTS -->
		  <script type="text/javascript">
		    $(document).ready(function() {
			$('select').material_select();
			});
		</script>
 


</body>

</html>