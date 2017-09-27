@extends('master')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <navbar class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </navbar>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Welcome to Melbourne's Open Data!
        </div>
        <div>
        @foreach ($stations as $station)
            <li> {{ $station }} </li>
        @endforeach
        </div>
        <!-- BikeStation::render(); -->
        <aside class="links">
            <a href="https://github.space-bits.io/upgraded-garbanzo">Documentation</a>
            <a href="https://github.com/space-bits/upgraded-garbanzo">GitHub</a>
        </aside>
    </div>
</div>
@stop
