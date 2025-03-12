<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="auth">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <div class="intro">
            <h1>Log in</h1>
        </div>
        <main>
            <form action="{{ route('auth.submit') }}" method="POST">
                @csrf

                <h2>Email:</h2>
                <input type="text" placeholder="example@example.com" required>
                <h2>Password:</h2>
                <input type="password" required>
                <button type="submit" id="signIn">Sign in</button>
            </form>
            <button id="signInWithFacebook">Log in with Facebook</button>
            <button id="signInWithGoogle">Log in with Google</button>
            <div class="registerContainer">
                <h2 id="registerLabel">New to Webshop? Make an account:</h2>
                <a id="registerLink" href="{{ route('register') }}"><button id="register">Register</button></a>
            </div>
        </main>
        <footer>By Elliot</footer>
    </div>
</body>
<script>
    window.addEventListener('scroll', function() {
        const element = document.querySelector('.downArrow');
        const productSections = document.querySelector('.productSection')

        if (window.scrollY > 500) {
            element.classList.add('hidden')
            element.classList.remove('show')
        } else {
            element.classList.remove('hidden')
            element.classList.add('show')
        }
    })
</script>
</html>


