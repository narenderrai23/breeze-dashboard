@extends('admin::layouts.guest')

@section('content')
    <main id="main-container">
        <div class="bg-image" style="background-image: url('media/photos/photo22@2x.jpg');">
            <div class="row g-0 bg-primary-op">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="{{ route('home') }}">
                                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Sign Up</p>
                        </div>
                        <!-- END Header -->
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form method="POST" action="{{ route('register') }}" class="js-validation-signin">
                                    @csrf
                                    <!-- Name -->
                                    <div class="mb-2">
                                        <x-base::input-label for="name" :value="__('Name')" />
                                        <x-base::text-input id="name" class="form-control-lg form-control-alt"
                                            type="text" name="name" :value="old('name')" required autofocus
                                            autocomplete="name" />
                                        <x-base::input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mb-2">
                                        <x-base::input-label for="email" :value="__('Email')" />
                                        <x-base::text-input id="email" class="form-control-lg form-control-alt"
                                            type="email" name="email" :value="old('email')" required
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

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-base::primary-button class="ms-4">
                                            {{ __('Register') }}
                                        </x-base::primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </main>
@endsection>
