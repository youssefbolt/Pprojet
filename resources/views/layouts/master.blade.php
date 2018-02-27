<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
</head>
<link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>


  <script>
$(document).ready(function(){
 $("button.vv").click(function(){
 $("div.cc").toggle();
 });
});
</script>


  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<body  background="c44.jpg">
 


<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert2@7.12.3/dist/sweetalert2.all.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav style="background-color:   #DC143C;" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
    
      </button>
     <a class="navbar-brand" href="#" >         <img src="{{asset('home.jpg')}}"  height="40" width="40" class="img-circle"></a>
      <a class="navbar-brand" href="acch" > <font color="#191970">  ACCUEIL  |</font> </a>
 @auth
 <a class="navbar-brand" href="{{url('home')}}" > <img src="{{asset('MESCONTR.png')}}"  height="40" width="40" class="img-circle"> </a>

      <a class="navbar-brand" href="{{url('home')}}" > <font color="#191970">  mes contribution  </a> </font> @endauth
       <a class="navbar-brand" href="#" > 
         <a class="navbar-brand" href="#" > 
           <a class="navbar-brand" href="#" > 
             <a class="navbar-brand" href="#" > 
               <a class="navbar-brand" href="#" > 
                 <a class="navbar-brand" href="#" > 
                   <a class="navbar-brand" href="#" > 
                     <a class="navbar-brand" href="#" > 
                       <a class="navbar-brand" href="#" > 
                         <a class="navbar-brand" href="#" > 
                            <a class="navbar-brand" href="#" > 
                     <a class="navbar-brand" href="#" > 
                       <a class="navbar-brand" href="#" > 
                         <a class="navbar-brand" href="#" >     <a class="navbar-brand" href="#" > 
                     <a class="navbar-brand" href="#" > 
                       <a class="navbar-brand" href="#" > 
                         <a class="navbar-brand" href="#" > 

                                                                   <a class="navbar-brand" href="#" > 
                                                                     <a class="navbar-brand" href="#" > 


 @auth
    <a class="navbar-brand" style="float: right;" href="{{url('/profile')}}"> <img src="{{asset('user.png')}}"  height="40" width="40" class="img-circle"></a>
      <a class="navbar-brand"  href="{{url('logout')}}"><img src="{{asset('logout.jpg')}}"  height="40" width="40" class="img-circle"></a> 
    
    @endauth
     
        
      







</div></div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
   

        </li>
 
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



  <h2></h2>


 



</br></br></br>
<div class="fb-page" style="margin-left:70%; width: 50%;position:absolute; position: fixed;" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/">‏‎Youssef Ait Taher‎‏</a></blockquote></div>
   

@yield('cont')
</div></a></div></div></nav>
</body>
</html>