@extends('layouts.master')

@section('cont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                  @foreach ($user as $nuser)
                  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-body">
                <div class="card-header"><center><h3><strong>  <img src="{{asset('edite.png')}}"  height="70" width="250"> </strong></strong></h3></div></center>

                <div class="card-body">
                    <form method="POST" action="{{ url('updateUser/') }}" enctype="multipart/form-data">
                        @csrf
</br>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $nuser->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




 <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $nuser->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ $nuser->ville }}" required autofocus>

                                @if ($errors->has('ville'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">tel</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ $nuser->tel }}" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



 <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Last  password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autofocus placeholder="*************">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



 <div class="form-group row">
                            <label for="Confime_password" class="col-md-4 col-form-label text-md-right"> Confime_password</label>

                            <div class="col-md-6">
                                <input id="Confime_password" type="password" class="form-control{{ $errors->has('Confime_password') ? ' is-invalid' : '' }}" name="Confime_password"   autofocus placeholder="*************">

                                @if ($errors->has('Confime_password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Confime_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="npassword" class="col-md-4 col-form-label text-md-right"> npassword</label>

                            <div class="col-md-6">
                                <input id="npassword" type="password" class="form-control{{ $errors->has('npassword') ? ' is-invalid' : '' }}" name="npassword"   autofocus placeholder="*************">

                                @if ($errors->has('npassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('npassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
































                       








  <div class="form-group row">
                            <label for="photo_user" class="col-md-4 col-form-label text-md-right"> photo </label>
 <img src="{{asset($nuser->photo_user)}}"  style="
       float:left;"  height="150" width="150" class="img-circle">
     

                            <div class="col-md-6">
 
            
 </div>
                        </div> <center><input type="file" name="photo_user" class="btn btn-info">
 <center>



                       </div>
  </div>
                        </div>
  <div class="form-group row mb-0">
      <center>  <button type="submit" class="btn btn-warning" style="width: 50%;">
                                    UPDATE
                                </button></center> 
                            <div class="col-md-6 offset-md-4">
                           
                            </div>
                        </div>

                    </form>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
