@extends('layouts.admin.app')

@section('content')

<section class="main_content dashboard_part">

    @include('layouts.admin.topheader')

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                    
                            <!-- Name -->
                            <div>
                                <label for="name">User Name</label>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <!-- FirstName -->
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                    
                            <!-- LastName -->
                            <div>
                                <x-input-label for="name" :value="__('Last Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                    
                            <!-- Phone Number -->
                            <div class="mt-4">
                                <x-input-label for="phone_no" :value="__('Phone Number')" />
                                <x-text-input id="phone_no" class="block mt-1 w-full" type="" name="phone_no" :value="old('phone_no')" required autocomplete="phone_no" />
                                <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                    
                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                    
                                <x-primary-button class="ms-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin.dashboardfooter')
</section>

@endsection