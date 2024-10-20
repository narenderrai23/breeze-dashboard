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
                            <!-- Session Status -->
                            <x-base::auth-session-status class="mb-4" :status="session('status')" />

                            <form class="js-validation-signin" action="{{ route('password.store') }}" method="POST">
                                @csrf
                                <div class="py-3">
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <div class="mb-2">
                                        <x-base::input-label for="email" :value="__('Email')" />
                                        <x-base::text-input id="email" class="form-control-lg form-control-alt"
                                            type="email" name="email" :value="old('email', $request->email)" required autofocus
                                            autocomplete="username" />
                                        <x-base::input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-2">
                                        <x-base::input-label for="password" :value="__('Password')" />
                                        <x-base::text-input id="password" class="form-control-lg form-control-alt"
                                            type="password" name="password" required autocomplete="new-password" />
                                        <x-base::input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-2">
                                        <x-base::input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-base::text-input id="password_confirmation"
                                            class="form-control-lg form-control-alt" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                                        <x-base::input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                {{-- <div class="w-100 btn-lg btn-hero">
                                    <x-base::primary-button>
                                        {{ __('Reset Password') }}
                                    </x-base::primary-button> --}}
                                <div class="mb-4">
                                    <x-base::primary-button class="w-100 btn-lg btn-hero">
                                        {{ __('Reset Password') }}
                                    </x-base::primary-button>
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
