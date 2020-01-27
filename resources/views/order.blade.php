@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('error'))
        <div class="alert alert-success text-center" style="width:500px; margin:0 auto 15px;">{{ session('error') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col"></th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $product)
            <tr>
                <td>{{ $product['item']->name }}</td>
                <td>&euro;{{ $product['item']->price }}</td>
                <td class="qty"><input type="text" class="form-control product-quantity" name="input1" id="input1" value="{{ $product['qty'] }}">
                </td>
                <td>
                    <a href="{{ route('changeQuantity', ['id' => $product['item']->id, 'value' => '0', 'price' => $product['item']->price ]) }}" class="btn">
                    <i class="glyphicon glyphicon-plus">+</i>
                    </a>
                    <a href="{{ route('changeQuantity', ['id' => $product['item']->id, 'value' => '1', 'price' => $product['item']->price ]) }}" class="btn">
                        <i class="glyphicon glyphicon-minus">-</i>
                    </a>
                </td>
                <td>&euro;{{ $product['price'] }}</td>
                <td>
                    <a href="{{ route('deleteItem', ['id' => $product['item']->id]) }}" class="btn btn-danger btn-sm">
                    <i class="glyphicon glyphicon-trash">X</i>
                    </a>
                </td>
            </tr>
            @endforeach
            <tr>
                <th scope="col">Total</th>
                <th scope="col"></th>
                <th scope="col">{{ $totalQuantity }}X</th>
                <th scope="col"></th>
                <th scope="col">&euro;{{ $totalPrice }}</th>
                <th scope="col"></th>
            </tr>
        </tbody>
    </table>
    <br><br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form method="post" action="{{ action('OrdersController@store') }}">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="naam" class="col-sm-2 col-form-label">Naam</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="naam" name="naam" value="{{ Auth::user()->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="straat" class="col-sm-2 col-form-label">Straatnaam + nmr</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="straat" name="straat" placeholder="Straatnaam 123" value="{{ old('straat') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Plaats" class="col-sm-2 col-form-label">Plaats</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="plaats" name="plaats" placeholder="Dorp/stad" value="{{ old('plaats') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="1234AM" value="{{ old('postcode') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="opmerking" class="col-sm-2 col-form-label">Opmerking</label>
            <div class="col-sm-10">
            <textarea name="opmerking" class="form-control" id="opmerking" name="opmerking" rows="1" placeholder="Opmerking">{{ old('opmerking') }}</textarea>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success float-right">Order</button>
    </form>
    <br><br>
</div>
@endsection

