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
            @if (isset($product) && $product->count())

            @else
                <p>No products!</p>
            @endif
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


