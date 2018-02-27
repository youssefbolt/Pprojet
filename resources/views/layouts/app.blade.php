<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert2@7.12.3/dist/sweetalert2.all.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.min.css')}}">
   
</head>
<body  background="c44.jpg">
 


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
     <a class="navbar-brand" href="#" >         <img src="{{asset('home.jpg')}}"  height="40" width="40" class="img-circle"></a>
      <a class="navbar-brand" href="#" > ACCUEIL  |</a>

    
    
     
        
      







</div></div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
   

        </li>
 
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')

<div style="margin-top: 6%;">
    <a class="navbar-brand" href=""></a>
  <a class="navbar-brand" href="#" > <img src="{{asset('fb.png')}}"  height="40" width="40" class="img-circle"> </a>
      <a class="navbar-brand" href="#" >  </a>
        <a class="navbar-brand" href="#" > <img src="{{asset('yt.png')}}"  height="40" width="40" class="img-circle"> </a>
      <a class="navbar-brand" href="#" > </a>
        <a class="navbar-brand" href="#" > <img src="{{asset('tw.png')}}"  height="40" width="40" class="img-circle"> </a>
      </div>
</body>
</html>
