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
<body id="product">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <div id="back-button">
            <a href="{{ url()->previous() }}">< Back</a>
        </div>
        <main>
            <div class="product-image">
                <img id="image" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" alt="Demon slayer mousepad">
            </div>
            <div class="product-info">
                <h1 class="product-title">Demon Slayer mousepad</h1>
                <h2 class="product-desc">Our high-quality non-slip mousepad with a unique design inspired by the popular anime: Demon Slayer!</h2>
                <h2 class="product-price">£19.99</h2>
                <div class="product-buttons">
                    <div class="product-button" id="cart"><a href="">ADD TO CART</a></div>
                    <div class="product-button" id="save"><a href="">SAVE FOR LATER</a></div>
                </div>
                <div class="buy-button">
                    <div id="buy"><a href="">BUY NOW</a></div>
                </div>
            </div>
        </main>
        <div class="product-spill">
            <img class="product-spill-image" src="{{ asset("assets/DemonSlayer-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Luffy-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Zoro2-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/DemonSlayer-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Zoro2-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Luffy-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Zoro2-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/DemonSlayer-Mousepad.png") }}" alt="">
            <img class="product-spill-image" src="{{ asset("assets/Luffy-Mousepad.png") }}" alt="">
        </div>
        <div class="product-main">
            <h3>Unleash your inner slayer with this high-quality Demon Slayer-inspired mouse pad!

                Designed for both anime lovers and gamers, this pad features stunning, high-resolution artwork of your favorite characters, bringing the power of the Demon Slayer Corps to your setup.

                ✅ Smooth & Durable Surface – Optimized for speed and precision, perfect for intense gaming sessions or daily tasks.
                ✅ Non-Slip Rubber Base – Stays firmly in place, ensuring stability during battles.
                ✅ Water-Resistant & Easy to Clean – No worries about accidental spills!
                ✅ Multiple Sizes Available – From compact to extended desk mats, choose the perfect fit for your setup.

                Enhance your gaming experience with the ultimate Demon Slayer mouse pad – a must-have for every fan! 💀⚔️🔥</h3>
        </div>
        <footer>By Elliot</footer>
    </div>
</body>
<script>
    const image = document.getElementById("image")
    const imageButtons = document.querySelectorAll(".product-spill-image")

    imageButtons.forEach(button => {
        button.addEventListener("click", () => {
            image.src = button.getAttribute("src")
        })
    });

    function isSmallScreen() {
        return window.innerWidth <= 430;
    }

    function moveElement() {
        const element = document.querySelector("product-buttons")
        const parent = document.querySelector("product-info")

        if isSmallScreen() {
            if (element.parentNode === parent) {
                document.body.appendChild(element);
            }
        } else {
            if 
        }
    }
</script>
</html>


