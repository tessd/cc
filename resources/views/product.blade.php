@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-success text-center" style="width:500px; margin:0 auto 15px;">{{ session('error') }}</div>
    @endif
<div class="container">
    <div class="row">
@foreach($products as $product)
    <div class="card col-sm-3">
        <div class="card-body">
            <h4 class="card-title">{{$product->name}}</h4>
            <div style="height: 100px;">
              <p class="card-text">{{$product->description}}</p>
            </div>
            <p class="card-text">&euro;{{$product->price}}</p>
            <a href="{{ route('addToCart', ['id' => $product->name]) }}" class="btn btn-success">Add to basket</a>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection