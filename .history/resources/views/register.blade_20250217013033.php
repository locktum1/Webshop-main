<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="register">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <main>
            @if ($errors->any())
                <script>alert("{{ implode('\n', $errors->all()) }}")</script>
            @endif
            <h1 class="pageTitle">Register</h1>
            <form id="registerForm" action="{{ route("register.submit") }}" method="POST">
                @csrf

                <div id="registerFormContainer">
                    <div class="registerInput">
                        <label for="name">Full name:</label>
                        <input name="fullname" type="text" placeholder="John Doe" value="{{ old('fullname') }}" required>
                    </div>
                    <div class="registerInput">
                        <label for="email">Email address:</label>
                        <input name="email" type="text" placeholder="example@example.com" value="{{ old('email') }}" required>
                    </div>
                    <div class="registerInput">
                        <label for="password">Password:</label>
                        <input name="password" type="password" required>
                    </div>
                    <div class="registerInput">
                        <label for="dob">Date of birth:</label>
                        <input name="dob" type="date" placeholder="dd/mm/yyyy" value="{{ old('fullname') }}" required>
                    </div>
                    <div class="registerCheckbox">
                        <input name="pp" type="checkbox" required>
                        <label for="pp">I agree to the <a href="{{ route("privacyPolicy") }}">Privacy Policy</a></label>
                    </div>
                    <button type="submit">REGISTER AND CONTINUE</button>
                </div>
            </form>
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


