<a href="{{ route('product.refer', ['id' => $id]) }}" class="productSection">
    <img src="{{ $src }}" alt="">
    <div class="sectionText">
        <h1>{{ $name }}</h1>
        <h2>{{ $price }}</h2>
    </div>
</a>
