@extends('admin::layouts.guest')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">
        <div class="row g-0 bg-primary-op">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-base::input-label for="password" :value="__('Password')" />

                    <x-base::text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-base::input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-base::primary-button>
                        {{ __('Confirm') }}
                    </x-base::primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
