@extends('layouts.master')

@section('cont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="panel panel-default" style="margin-left: 100px; margin-right: 20px; margin-top: 40px;">
  <div class="panel-heading"><strong>  <img src="{{asset('create.jpg')}}"  height="50" width="40"> CREATE NEW CONTRIBUTION </strong></div>
  <div class="panel-body">
    
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

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
                             

                                 <textarea rows="4" cols="50" id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ old('text') }}" required autofocus>

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
  <option value="Rabat">Rabat</option>
   <option value="agadir">agadir</option> <option value="type_cnb">Es_smara</option> <option value="tanger">tanger</option>
  <option value="meknes">meknes</option>
  <option value="fes">fes</option>
  <option value="casa">casablanca</option>

</select> 
                            </div>
                        </div>


  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">photo </label>

                            <div class="col-md-6">

            <input type="file" name="photo_cnb" >
 </div>
                        </div>

  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">video </label>

                            <div class="col-md-6">

            <input type="file" name="video" >
 </div>
                        </div>


                        <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                             </div>
                           <button type="submit" class="btn btn-warning">
                                    Register
                                </button>                            </div> 

                        </div>
                    </form>
                </div>
             </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
