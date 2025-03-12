<a class="icon" id="left" href="{{ route('logut') }}"><img src="{{ asset('assets/side-bar.svg') }}" alt="Side bar"></a>
<a class="title" href="{{ route('index') }}"><h1>Webshop</h1></a>

@guest
    <div class="dropdown">
        <a class="icon" id="right" href="{{ route('auth') }}"><img src="{{ asset('assets/user-line.svg') }}" alt="Log in or register"></a>
        <div class="dropdown-content">
            <a href="auth">Sign in</a>
            <a href="register">Register</a>
        </div>
    </div>
@endguest

@auth
    <div class="cart">
        <a class="icon" id="right" href="{{ route('product') }}"><img src="{{ asset('assets/side-bar.svg') }}" alt="Log in or register"></a>
    </div>
@endauth
