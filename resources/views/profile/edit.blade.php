@extends('layouts.main', ['title' => 'Profile'])

@section('content')
    <div class="flex flex-col items-start md:items-center py-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg w-full md:w-3/4">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg w-full md:w-3/4">
            @include('profile.partials.update-password-form')
        </div>
    </div>
@endsection
