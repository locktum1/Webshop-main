<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="product">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <div id="back-button">
            <a href="{{ url()->previous() }}">< Back</a>
        </div>
        <main id="main">
            <div class="product-image">
                <img id="image" src="{{ asset('assets/DemonSlayer-Mousepad.png') }}" alt="Demon slayer mousepad">
            </div>
            <div class="product-info">
                <h1 class="product-title">Demon Slayer Mousepad</h1>
                <h2 class="product-price">£19.99</h2>
                <div class="product-quantity">
                    <p class="minus">-</p>
                    <p class="quantity">1</p>
                    <p class="plus">+</p>
                </div>
                <div class="product-buttons">
                    <div class="product-button" id="save"><a href="">Save for later</a></div>
                    <div class="product-button" id="cart" data-id="1" data-name="Demon Slayer Mousepad" data-price="19.99"><a href="javascript:void(0);">Add to cart</a></div>
                    <div class="product-button" id="buy"><a href="">Buy now</a></div>
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

    document.getElementById("cart").addEventListener("click", function() {
        let productId = this.getAttribute("data-id");
        let productName = this.getAttribute("data-name");
        let productPrice = this.getAttribute("data-price");

        let csrfToken = document.querySelector('meta[name="csrf-token"]');
        if (!csrfToken) {
            console.error("CSRF token meta tag is missing!");
            return;
        }

        fetch("{{ url('/add-to-cart') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({
                id: productId,
                name: productName,
                price: productPrice
            })
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => console.error("Error:", error));
    });
</script>
</html>


