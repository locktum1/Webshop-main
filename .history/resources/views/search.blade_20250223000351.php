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
<body id="search">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <main>
            <input type="text" placeholder="Search">
            <div class="productContainer">
                <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Zoro2-Mousepad.png') }}" name="Zoro Mouse Pad" price="£24.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" name="Demon Slayer Mouse Pad" price="£19.99"></x-product>
            <x-product route="{{ route('product') }}" src="{{ asset('assets/Luffy-Mousepad.png') }}" name="Luffy Mouse Pad" price="£19.99"></x-product>
            </div>
        </main>
        <footer>By Elliot</footer>
    </div>
</body>
</html>


