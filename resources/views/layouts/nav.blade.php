@if (Route::has('login'))
    <navbar class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </navbar>
@else
    <navbar class="top-right links">
        a;lsdjjlasd
    </navbar>
@endif
