@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <a href="{{ route('productShow',['id' => $product->id]) }}"><img src="{{$product->product_images[0]->source_img}}" class="product_img"></a>
                    <div><a href="{{ route('productShow',['id' => $product->id]) }}">{{ $product->name }}</a></div>
                    <span>{{ $product->price }}</span>
                    <p><a class="btn btn-dark" href="#" role="button">Add to cart</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
