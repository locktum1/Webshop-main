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
<body id="privacyPolicy">
    <x-side-bar></x-side-bar>
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <div class="intro">
            <h1>Privacy policy</h1>
        </div>
        <main>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Harum vel nemo ducimus deleniti ut odit corporis quos minus esse facilis, vitae impedit!<br>Eos perspiciatis mollitia deleniti porro, iusto eaque vel? lorem. </h2>
        </main>
        <footer><h1>By Elliot :D</h1></footer>
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


