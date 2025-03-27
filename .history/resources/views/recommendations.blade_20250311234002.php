<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body id="recommendations">
    <div class="bg">
        <header>
            <x-header></x-header>
        </header>
        <x-side-bar></x-side-bar>
        <div class="intro">
            <h1>Your recommendations</h1>
        </div>
        <main>

            <div class="productContainer">

            </div>
            {{-- <div class="pagination">
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
            </div> --}}
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


