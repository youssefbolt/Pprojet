@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 3%; margin-left: 15%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div background="bagn.jpg">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">sex</label>

                            <div class="col-md-6">
                                <input type="radio" name="sex" value="male"> homme
  <input type="radio" name="sex" value="female"> famme


                                @if ($errors->has('sex'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

















                        <div class="form-group row">
                            <label for="radem_u" class="col-md-4 col-form-label text-md-right">radem_u</label>

                            <div class="col-md-6">
                                <input id="radem_u" type="text" class="form-control{{ $errors->has('radem_u') ? ' is-invalid' : '' }}" name="radem_u" value="{{ old('radem_u') }}" required autofocus>

                                @if ($errors->has('radem_u'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('radem_u') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       







                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">ville</label>

                            <div class="col-md-6">
                           <select name="ville">
  <option value="Rabat">Rabat</option>
   <option value="agadir">agadir</option> <option value="Es_smara">Es_smara</option> <option value="tanger">tanger</option>
  <option value="meknes">meknes</option>
  <option value="fes">fes</option>
  <option value="casa">casablanca</option>

</select> 
                            </div>
                        </div>




             <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">tel</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

      



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                              <div class="form-group row">
                            <label for="dateN" class="col-md-4 col-form-label text-md-right">Date Naissance </label>

                            <div class="col-md-6">
                                <input id="dateN" type="date" class="form-control{{ $errors->has('dateN') ? ' is-invalid' : '' }}" name="dateN" value="{{ old('dateN') }}" required>

                                @if ($errors->has('dateN'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dateN') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
