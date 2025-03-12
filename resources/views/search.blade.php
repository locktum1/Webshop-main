<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <form method="GET" action="{{ route('product.search') }}">
                <input type="text" name="search" id="search-input" placeholder="Search" value="{{ request()->query('search') }}" onkeydown="if(event.key === 'Enter'){this.form.submit();}">
            </form>

            <div class="productContainer">
                @if ($products->isEmpty())
                    <h1 class="no-Results">No results found.</h1>
                @else
                @foreach($products as $product)
                    <x-product route="{{ route('product') }}" src='{{ asset("assets/{$product->img}") }}' name="{{ $product->name }}" price="{{ $product->price }}"></x-product>
                @endforeach
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
        <footer>By Elliot</footer>
    </div>
</body>
</html>


