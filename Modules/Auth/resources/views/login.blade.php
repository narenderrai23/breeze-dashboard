@extends('layouts.guest')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">
        <div class="row g-0 bg-primary-op">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                <div class="p-3 w-100">
                    <!-- Header -->
                    <div class="mb-3 text-center">
                        <a class="link-fx fw-bold fs-1" href="{{ route('home') }}">
                            <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-6">
                            <x-base::auth-session-status class="mb-4" :status="session('status')" />

                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="py-3">
                                    <div class="mb-2">
                                        <x-base::input-label for="email" :value="__('Email')" />
                                        <x-base::text-input id="email" type="email"
                                            class="form-control-lg form-control-alt" name="email" :value="old('email')"
                                            required autofocus autocomplete="username" />
                                        <x-base::input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="mb-2">
                                        <x-base::input-label for="password" :value="__('Password')" />

                                        <x-base::text-input id="password" type="password"
                                            class="form-control-lg form-control-alt" name="password" required
                                            autocomplete="current-password" />

                                        <x-base::input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <x-base::primary-button class="w-100 btn-lg btn-hero">
                                        {{ __('Log in') }}
                                    </x-base::primary-button>
                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                href="{{ route('password.request') }}">
                                                <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot password
                                            </a>
                                        @endif
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                            href="{{ route('register') }}">
                                            <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                        </a>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
            </div>
            <!-- END Main Section -->

            <!-- Meta Info Section -->
            <div
                class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                <div class="p-3">
                    <p class="display-4 fw-bold text-white mb-3">
                        Welcome to the future
                    </p>
                    <p class="fs-lg fw-semibold text-white-75 mb-0">
                        Copyright &copy; <span data-toggle="year-copy"></span>
                    </p>
                </div>
            </div>
            <!-- END Meta Info Section -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
