@extends('master')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Melbourne's Open Data

            <!-- BikeStation::render(); -->
        </div>

        @yield('bikedata')

        <div class="links">
            <a href="https://github.space-bits.io/upgraded-garbanzo">Documentation</a>
            <a href="https://github.com/space-bits/upgraded-garbanzo">GitHub</a>
        </div>
    </div>
</div>
@stop
