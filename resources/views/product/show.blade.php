<x-layout>
    <h1>{{ $product->name }}</h1>
                @php
                $images = DB::table('images')->where('product_id', $product->id)->get();
                $images->shift();
                $index=1;
                @endphp
    <div class="product-page">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @foreach ($images as $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"></li>
                @php 
                $index++ 
                @endphp
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                
                @foreach ($images as $image)
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/product/' . $image->image_name) }}" alt="{{ $image->alt_text }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div>
            {!! $product->description !!}
            

            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>