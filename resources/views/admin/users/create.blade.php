@extends('layouts.admin.app')

@section('content')

<section class="main_content dashboard_part">

    @include('layouts.admin.topheader')

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12 py-4">
                    <div class="form">
                        <form method="POST" action="{{ route('admin.users.store') }}">
                            @csrf
                    
                            <!-- Name -->
                            <div class="form-group mt-4">
                                <label for="name">User Name</label>
                                <x-text-input id="name" class="block form-control mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <!-- FirstName -->
                            <div class="form-group mt-4">
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="first_name" class="block form-control mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                    
                            <!-- LastName -->
                            <div class="form-group mt-4">
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" class="block form-control mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                    
                            <!-- Phone Number -->
                            <div class="form-group mt-4">
                                <x-input-label for="phone_no" :value="__('Phone Number')" />
                                <x-text-input id="phone_no" class="block form-control mt-1 w-full" type="" name="phone_no" :value="old('phone_no')" required autocomplete="phone_no" />
                                <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="form-group mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block form-control mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="form-group mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                    
                                <x-text-input id="password" class="block form-control mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="form-group mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                                <x-text-input id="password_confirmation" class="block form-control mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                    
                                <x-primary-button class="">
                                    {{ __('Add New User') }}
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