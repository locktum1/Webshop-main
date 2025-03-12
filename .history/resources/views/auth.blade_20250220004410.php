<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="auth">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <main>
            @if ($errors->any())
                <script>alert("{{ implode('\n', $errors->all()) }}")</script>
            @endif
            <h1 class="pageTitle">Log in</h1>
            <form id="authForm" action="{{ route("auth.submit") }}" method="POST">
                @csrf

                <div id="authFormContainer">
                    <div class="authInput">
                        <label for="email">Email address:</label>
                        <input name="email" type="text" placeholder="example@example.com" required>
                    </div>
                    <div class="authInput">
                        <label for="password">Password:</label>
                        <input name="password" type="password" required>
                    </div>
                    <button type="submit">SIGN-IN AND CONTINUE</button>
                </div>
            </form>
            <p>Alternatively, sign in using:</p>
            <div id="signInOptions">
                <a href=""><div class=".signInOption" id="google"><img src="{{ asset("assets/google.svg") }}" alt=""></div></a>
                <a href=""><div class=".signInOption" id="facebook"><img src="{{ asset("assets/facebook.svg") }}" alt=""></div></a>
            </div>
            <h3 class="register-text">New to Webshop? <a href="" class="register-link">Register</a></h3>
        </main>
        <footer>By Elliot</footer>
    </div>
</body>
</html>


