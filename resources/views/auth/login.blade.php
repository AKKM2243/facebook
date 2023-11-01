@extends('layouts.app')

@section('content')
<div class="container text-center" style="padding-top: 200px">
    <div class="d-inline-flex row" style="margin-right: 0; ">
        <div class="col-md-6">
            <h1 class="text-primary" style="font-size: 80px;" >
                facebook
            </h1>
            <p class="fw-bold" style="font-size: 20px;">
                Facebook helps you connect and share<br> with the people in your life.
            </p>
        </div>
        <div class="col-md-6">
            <div class="container border rounded-4 shadow py-5" style="width: 500px; background-color: #FFFFFF;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
