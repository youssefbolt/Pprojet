@extends('layouts.master')

@section('cont')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">

  @foreach ($cnb as $ncnb)
 






<div class="panel panel-default" style="position: relative; ">
  <div class="panel-heading"> <strong><i>{{$ncnb->title}}</i></strong></div>
  <div class="panel-body">
  	   <pre> <marquee style="width:200px;" scrollamount="10"><strong><i>{{$ncnb->type_cnb}}</marquee> </i></strong></pre> 
  	   <img src="{{asset($ncnb->photo_cnb)}}"  style="
       float:left;"  height="100" width="100" class="img-circle">
  	   {{$ncnb->text}}

   <video width="700" height="500" controls>
  <source src="{{asset(''.$ncnb->video)}}" type="video/mp4">


</video> 

  </div>

  {{$ncnb->created_at}}
  <center><p><a href=<?php echo "/home#".$ncnb->id; ?> class="btn btn-primary" role="button"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Voire</a> </p></center>
  	 
</div>

</div>
</div>
</div>
 <a  >lien</a>

<div class="panel panel-default"   style="position: absolute; top: 70px; right:20px; width: 30%; height: 100%;"   >
  <div class="panel-heading"> Autre Video</div>
  <?php  $a=0;?>
  @foreach ($allcnb as $allncnb )
  <?php  
  $a=$a+1; ?>
@if($a<'7')
 <strong><center>{{$allncnb->type_cnb}}</center> </strong>
  <div class="panel-body">

  <a href="{{url('watch/'.$allncnb->id)}}"> <video width="200" height="100" controls>
  <source src="{{asset(''.$allncnb->video)}}" type="video/mp4">



</video> 
 <img src="{{asset($allncnb->photo_cnb)}}"  style="
       float:left;"  height="100" width="100" class="img-circle"></a>
</br>
<center>{{$allncnb->created_at}}</center>
  
<hr>
  </div> @endif  @endforeach @endforeach  
</div>























@endsection