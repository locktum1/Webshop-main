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
<body id="index">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <div class="intro">
            <h1>Welcome to <span class="bold">Webshop</span></h1>
            <h2>Your favourite place to shop online!</h2>
            <img class="downArrow" id="left" src="{{ asset('assets/arrow-down-s-fill.svg') }}" alt="Side bar">
        </div>
        <main>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
        </div>
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


