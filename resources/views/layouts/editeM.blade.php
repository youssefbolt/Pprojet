<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.min.css')}}">
<body bgcolor="">


<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert2@7.12.3/dist/sweetalert2.all.js"></script>


<nav >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#" >         <img src="{{asset('home.jpg')}}"  height="30" width="40" class="img-circle"></a>
      <a class="navbar-brand" href="#" ><h6> ACCUEIL |</h6> </a>

 <a class="navbar-brand" href="{{url('home')}}" > <img src="{{asset('MESCONTR.png')}}"  height="30" width="40" class="img-circle"> </a>
      <a class="navbar-brand" href="{{url('home')}}" ><h6>  MES CONTRIBUTION </h6> </a>

    <a class="navbar-brand" href="{{url('home')}}" > <img src="{{asset('create1.jpg')}}"  height="30" width="40" class="img-circle"> </a>
      <a class="navbar-brand" href="{{url('create')}}" ><h6> AJOUTER CONTRIBUTION </h6> </a>


    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
       </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>





      <ul class="nav navbar-nav navbar-right">
      <a href="{{url('/profile')}}">	<img src="{{asset(''.Auth::User()->photo_user)}}"  height="50" width="60" class="img-circle">
        <li></a>

        </li>
      
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
   

        </li>
  <a  href="{{url('logout')}}"><img src="{{asset('logout.jpg')}}"  height="50" width="60" class="img-circle"></a> 
      </ul></ul>


       <ul class="nav navbar-nav navbar-right">
     
        <li></a>

        </li>
      
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
   

        </li>
  
      </ul></ul>
      
      <a href="#">	<img src="{{asset('yt.png')}}"  height="50" width="60" class="img-circle">
        </a>
 <a href="#">	<img src="{{asset('fb.png')}}"  height="50" width="60" class="img-circle"></a>
 <a  href="#"><img src="{{asset('tw.png')}}"  height="50" width="60" class="img-circle"></a> 
        
      
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
   

        </li>
  
      </ul></ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('cont')
</body>
</html>