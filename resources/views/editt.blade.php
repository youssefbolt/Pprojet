@extends('layouts.master')

@section('cont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                  @foreach ($cnb as $ncnb)
                  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-body">
                <div class="card-header"><center><h3><strong>  <img src="{{asset('edite.png')}}"  height="70" width="250"> </strong></strong></h3></div></center>

                <div class="card-body">
                    <form method="POST" action="{{ url('update/'.$ncnb->id) }}" enctype="multipart/form-data">
                        @csrf
</br>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $ncnb->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">text</label>

                            <div class="col-md-6">
                             

                                 <textarea rows="4" cols="50" id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ $ncnb->text }}" required autofocus>
{{ $ncnb->text }}
</textarea> 

                                @if ($errors->has('text'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       







                        <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">type_cnb</label>

                            <div class="col-md-6">
                           <select name="type_cnb">
  <option value="{{$ncnb->type_cnb}}">{{$ncnb->type_cnb}}</option>
   

</select> 
                            </div>
                        </div>


  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">photo </label>
 <img src="{{asset($ncnb->photo_cnb)}}"  style="
       float:left;"  height="150" width="150">

                            <div class="col-md-6">
 
            
 </div>
                        </div><center>  <input type="file" name="photo_cnb"></center>

  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">video </label>
                            @if($ncnb->video!=null)
 <video width="400" height="300" controls>
  <source src="{{asset(''.$ncnb->video)}}" type="video/mp4">



</video> @endif
                            <div class="col-md-6">

            

                        </div>


                        <div class="form-group row mb-0"><input type="file" name="video" >
                            <div class="col-md-6 offset-md-4">
                                 </div> 
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>Panel Content</div>
  </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
