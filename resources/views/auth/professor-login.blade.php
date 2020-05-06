@extends('layouts.app-professor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: black; font-size:25px;" class="card-header">{{ __('Login Professor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('professor.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="color: black; font-size:25px;" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input style="color: black; font-size:20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label style="color:black; font-size:25px;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input style="color: black; font-size:20px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input mt-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="color: black; font-size:20px" class="form-check-label" for="remember">
                                        {{ __('Lembrar de mim') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button style="font-size:20px; width:110px;" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
<<<<<<< HEAD
                                    <a style="font-size: 20px;" class="btn btn-link" href="{{ route('professor.password.request') }}">
                                        {{ __('Esqueceu sua senha ?') }}
=======
                                    <a class="btn btn-link" href="{{ route('professor.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
>>>>>>> 710d482cd7235aa3529e5a11820e6028ff5868c2
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
