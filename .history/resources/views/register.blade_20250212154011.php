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
        <main>
            <h1 class="pageTitle">Log in</h1>
            <form id="registerForm" action="">
                <div id="registerFormContainer">
                    <div class="registerInput">
                        <label for="name">Full name:</label>
                        <input name="name" type="text" placeholder="John Doe">
                    </div>
                    <div class="registerInput">
                        <label for="email">Email address:</label>
                        <input name="email" type="text" placeholder="example@example.com">
                    </div>
                    <div class="registerInput">
                        <label for="password">Password:</label>
                        <input name="email" type="password">
                    </div>
                    <div class="registerInput">
                        <label for="dob">Email address:</label>
                        <input name="email" type="text" placeholder="example@example.com">
                    </div>
                    <button type="submit">SIGN-IN AND CONTINUE</button>
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


