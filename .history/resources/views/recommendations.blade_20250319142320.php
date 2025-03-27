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
                @if (isset($products) && $products->count())
                @foreach ($products as $product)
                    <x-product route="{{ route('product') }}" src='{{ asset("assets/{$product->img}") }}' name="{{ $product->name }}" price="{{ $product->price }}"></x-product>
                @endforeach
                @else
                    <p>No products!</p>
                @endif
            </div>
            <div class="pagination">
                @if ($products->onFirstPage())
                        <div class="disabled">
                            <span class="prev-btn"><</span>
                        </div>
                    @else
                        <div>
                            <a href="{{ $products->previousPageUrl() }}" class="prev-btn"><</a>
                        </div>
                    @endif

                    @foreach ($products->links()->elements[0] as $page => $url)
                        @if ($page == $products->currentPage())
                            <div class="active">
                                <span>{{ $page }}</span>
                            </div>
                        @else
                            <div>
                                <a href="{{ $url }}" class="page-btn">{{ $page }}</a>
                            </div>
                        @endif
                    @endforeach

                    @if ($products->hasMorePages())
                        <div>
                            <a href="{{ $products->nextPageUrl() }}" class="next-btn">></a>
                        </div>
                    @else
                        <div class="disabled">
                            <span class="next-btn">></span>
                        </div>
                    @endif
            </div>
        </main>
        <footer><h1>By Elliot :D</h1></footer>
    </div>
</body>
<script>
    
</script>
</html>


