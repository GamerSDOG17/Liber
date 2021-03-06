@extends('layouts.app-professor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: black; font-size:25px;" class="card-header">{{ __('Registro de professor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('professor.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="color: black; font-size:25px;" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input style="color: black; font-size:20px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: black; font-size:25px;" for="escola" class="col-md-4 col-form-label text-md-right">{{ __('Escola') }}</label>

                            <div class="col-md-6">
                                <input style="color: black; font-size:20px;" id="escola" type="text" class="form-control @error('escola') is-invalid @enderror" name="escola" value="{{ old('escola') }}" required autocomplete="escola" autofocus>

                                @error('escola')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: black; font-size:25px" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input style="color: black; font-size:20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label style="color: black; font-size:25px;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                            <input style="color: black; font-size:20px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: black; font-size:25px;" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                            <div class="col-md-6">
                            <input style="color: black; font-size:20px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="width: 135px; font-size:20px;" type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
