@extends('layouts.master')

@section('cont')
<h1>@include('sweet::alert')  </h1>

  @if(session()->has('eroor'))
 <div class="alert alert-warning">

{{session()->get('eroor')}}












  </div>
@endif


<div class="container" style="margin-top: 0%;" >



  <div  style="width: 70%;" class="panel panel-primary">
    <div class="panel-body"> 
    <div class="form-group">
        <form method="POST" action="{{ url('sss') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
      <label for="sel1">Ville</label>
      <select class="form-control" style="width: 50%;" name="ville">
              <option></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
       <button type="submit" class="btn btn-warning" style=" float: right; width: 30%;">
                                    Register
                                </button>  
          <label for="sel1">type de contribution </label>
       <select class="form-control" style="width: 50%; " name="type_cnb">
        <option></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
   
 </form>
</div>
 
                            

                                
</div>
 </div>

             



 <?php $count=0; ?>

 <div class="panel panel-info" style="width: 70%;"  >



















      <div class="panel panel-default"><h2> 

















      </h2> </div>
      <div class="panel-body">

  @foreach ($cnb as $ncnb) <?php $count=$count+1 ;  ?>


 <a id=<?php echo $ncnb->id; ?> ></a>


      <div >
      <div >
<center>
        <img src="{{asset($ncnb->photo_user)}}" class="img-circle" height="42" width="42"> 

        <strong>{{$ncnb->name}}      </strong>         
     </div> </center>

      <div class="panel-body"> <strong>{{$ncnb->title}}       </strong>

 
  <div class="row">
 
   
     
      <div class="caption">
        <h3></h3>
        <p></p>



<div class="panel panel-default" style="float:left; width: 90%;" height="420" width="420">
  <div class="panel-heading" ><strong> text</strong> </div>
  <div class="panel-body">
    <img src="{{asset($ncnb->photo_cnb)}}"  style="
       float:left;"  height="150" width="150">
          e terme « automobile » est à l'origine un adjectif issu de la concaténation d'un préfixe grec, αὐτός (soi-même), et d'un suffixe latin, mobilis (mobile). Il a été créé lors de l'invention des premières « voitures sans chevaux » car elles étaient munies d'un moteur avec source d'énergie embarquée alors que les autres « voitures », diligences, calèches, carrioles, chariots et autres véhicules terrestres étaient mus par des animaux de trait (généralement des chevaux (hippomobiles) ou des bœufs).

Le substantif « automobile » est attesté vers 1890, mais son genre, aujourd'hui seulement féminin, est longtemps resté pour les linguistes un sujet ouvert3. L'Académie française s'est prononcée dès 1901 pour le genre féminin4, mais la polémique ne s'est éteinte que bien après, le masculin étant attesté ponctuellement jusqu'en 19443.

  </div>
     <div class="panel-footer"> <img src="{{asset('email.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->email}} 
<img src="{{asset('tele.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->tel}} 
<img src="{{asset('ville.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->ville}}




     </div>
</div>
@if($ncnb->video!=null)
<a href="{{url('watch/'.$ncnb->id)}}"><img src="{{asset('Video.jpg')}}" class="img-circle" height="200" width="50"></a>@endif
        

</div></div>


 <hr>
  <script>
  $('a1').click(function(e) {
    e.preventDefault(); // Prevent the href from redirecting directly
    var linkURL = $(this).attr("href");
    warnBeforeRedirect(linkURL);
  });

  function warnBeforeRedirect(linkURL) {
    swal({
      title: "Leave this site?", 
      text: "If you click 'OK', you will be redirected to " + linkURL, 
      type: "warning",
      showCancelButton: true
    }, function() {
      // Redirect the user
      window.location.href = linkURL;
    });
  }
  </script>


</div></div>

@if($count==5)

 <center> <ul class="pagination">
    <li><a href="{{url('/home')}}">Acchueih</a></li>
    <?php  $ncnb->id=$ncnb->id-10; ?>
   
    <li class="active"><a href="{{url('indexusers/'.$ncnb->id)}}">page précedent</a></li>
   <?php  $ncnb->id=$ncnb->id+10; ?>
    <li><a href="{{url('indexusers/'.$ncnb->id)}}">page suvaint </a></li>
   
  </ul>



@endif








@endforeach

 </div>
   </div>


</div></div>




</div>
<div class="fb-comments" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" style="width: 99%; margin-left: 20%;" data-numposts="5"></div>
</div>
</div>



@endsection


 