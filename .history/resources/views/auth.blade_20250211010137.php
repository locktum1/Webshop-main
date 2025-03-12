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
        <main>
            <div id="authContent">
                <h1 class="pageTitle">Log in</h1>
                <form id="authForm" action="">
                    <div id="authFormContainer">
                        <div class="authInput">
                            <label for="email">Email address:</label>
                            <input name="email" type="text" placeholder="example@example.com">
                        </div>
                        <div class="authInput">
                            <label for="password">Password:</label>
                            <input name="email" type="password">
                        </div>
                        <button type="submit">SIGN-IN AND CONTINUE</button>
                    </div>
                </form>
                <p>Alternatively, sign in using:</p>
                <div id="signInOptions">
                    <a href=""><div class=".signInOption" id="google"><img src="{{ asset("assets/google.svg") }}" alt=""></div></a>
                    <a href=""><div class=".signInOption" id="facebook"><img src="{{ asset("assets/facebook.svg") }}" alt=""></div></a>
                </div>
                </main>
            </div>
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


