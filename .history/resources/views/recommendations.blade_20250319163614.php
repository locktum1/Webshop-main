<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="browse">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <div class="intro">
            <h1>Browse</h1>
        </div>
        <main>
            <div class="productContainer">
                @if (isset($results) && $results->count())
                @foreach ($results as $result)
                    <x-product route="{{ route('cart') }}" src='{{ asset("assets/") }}' name="{{ $result }}" price="hi"></x-product>
                @endforeach
                @else
                    <p>No products!</p>
                @endif
            </div>
        </main>
        <footer><h1>By Elliot :D</h1></footer>
    </div>
</body>
<script>

</script>
</html>


