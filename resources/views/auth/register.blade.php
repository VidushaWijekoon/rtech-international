@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house fa-2x p-2" style="color: #0dcaf0"></i>
        </a>
        <div class="row justify-content-center align-items-center" style="min-height: 80vh">
            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title d-flex justify-content-center">
                            <img src="{{ asset('images/logortbig.png') }}" alt="Company Logo" width="135">
                        </div>
                        <hr>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="form-label">{{ __('Name') }} </label>
                                <div class="">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        style="border-radius: 0">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }} </label>
                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        style="border-radius: 0">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="form-label">{{ __('Username') }} </label>
                                <div class="">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus
                                        style="border-radius: 0">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="form-label">{{ __('Password') }} </label>
                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border-radius: 0">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        style="border-radius: 0">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="offset-md-4">
                                    <button type="submit" class="btn btn-sm btn-outline-info px-4"
                                        style="border-radius: 0">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <div class="row mb-0 mt-4">

                                <div class="col-md-12">
                                    <span class="text-capitalize">
                                        <div>If you're registed please login
                                            <a href="{{ route('login') }}" style="text-decoration: none">Login</a>
                                        </div>

                                    </span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
