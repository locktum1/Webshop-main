<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="register">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <div class="intro">
            <h1>Register</h1>
        </div>
        <main>
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <script>
                        alert("{{ implode('\n', $errors->all()) }}");
                    </script>
                @endif

                <h2>Full name:</h2>
                <input name="fullname" class="registerInput" type="text" placeholder="John Doe" required>
                <h2>Email:</h2>
                <input name="email" class="registerInput" type="text" placeholder="example@example.com" required>
                <h2>Password:</h2>
                <input name="password" class="registerInput" type="password" required>
                <h2>Date of birth:</h2>
                <input name="dob" class="registerInput" type="date" required>
                <label id="checkbox">
                    <input type="checkbox" required>
                    I agree to the <a href="{{ route("privacyPolicy") }}">privacy policy</a>
                </label>
                <button type="submit" id="registerButton">Register</button>
            </form>
            <div class="signInContainer">
                <h2 id="signInText">Already have an account? Sign in!</h2>
                <a id="signInLink" href="{{ route('auth') }}"><button id="signInButton">Sign in</button></a>
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


