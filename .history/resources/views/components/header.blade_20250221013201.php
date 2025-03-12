<a class="icon" id="left" href="{{ route('index') }}"><h1>☰</h1></a>
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

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">@csrf</form>

@auth
    <div class="cart">
        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon" id="right" href="#"><img src="{{ asset('assets/cart-line-icon.svg') }}" alt="Log in or register"></a>
    </div>
@endauth
