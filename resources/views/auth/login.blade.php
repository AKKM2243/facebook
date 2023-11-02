@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 200px">
    <div class="d-inline-flex">
        <div class="row col-md-7 offset-md-1">
            <div class="container">
                <h1 class="text-primary fw-bold" style="font-size: 60px; " >
                    facebook
                </h1>
                <p class="fw-bold fs-2">
                    Facebook helps you connect and share <br> with the people in your life.
                </p>
            </div>
        </div>
        <div class="row container col-md-5 offset-md-1" style="width: 400px;">
            <div class="ms-1 border rounded-4 shadow pt-3" style="background-color: #FFFFFF;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input id="email" placeholder="Email or Phone Number" type="email" class="fs-5 p-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input id="password" placeholder="Password" type="password" class="fs-5 p-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="col-md-12 btn btn-primary fs-5 p-2">
                                {{ __('Log In') }}
                            </button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="col-md-12 btn fs-5 p-2" style="background-color: #35A420; color: white;">
                                {{ __('Create new account') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
