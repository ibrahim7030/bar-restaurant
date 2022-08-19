@extends('layouts.app')

@section('content')
<section class="">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card">
                    <div class="row g-0">

                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{URL('storage/image3.jpg')}}" alt="login form" class="img-fluid"/>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        {{--  <i class="fas fa-cubes fa-3x me-3" style="color: #ff6219;"></i>  --}}
                                        <span class="fs-1 h1 fw-bold me-3" style="color: rgba(206, 170, 180, 0.943);">Rg</span>
                                        <span class="h4 fw-bold mb-0 ">

                                            <span style="color: rgba(20, 17, 18, 0.943);">Bar-restaurant</span>
                                        </span>

                                        {{--  <span style="color: rgba(206, 170, 180, 0.943);">Bar-restaurant</span>  --}}
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="pt-1 mb-4">
                                    @if (Route::has('password.request'))
                                        <a class=" medium text-muted" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;"> Don't have an account?
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" style="color: #393f81;">
                                                Register here
                                            </a>
                                        @endif
                                    </p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
