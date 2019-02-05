@extends('layouts.app')

@section('product')
    @if($product)
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide product_img_carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ $product->product_images[0]->source_img }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ $product->product_images[1]->source_img }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ $product->product_images[2]->source_img }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="col-md-6">
                <div>{{ $product->name }}</div>
                <span>Price: {{ $product->price }} $</span>
                <p><a class="btn btn-dark" href="#" role="button">Add to cart</a></p>
                <div>{{ $product->description }}</div>
            </div>
        </div>
    @endif
@endsection