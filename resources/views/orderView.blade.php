@extends('layouts.app')

@section('content')
    @if(count($info) > 0)
        <div class="row">
            @foreach($info as $key => $item)
                <div class="card text-center col-md-4 @if($item->Status == 'open') order-first @else order-last @endif">
                    <div class="card-body">
                        <h4>{{ $item->Name }}</h4>
                        <h5>{{ $item->Street }}</h5>
                        <h5>{{ $item->City }}</h5>
                        <h5>{{ $item->Zip_code }}</h5>
                        <h5>Order:</h5>
                        <h6>@foreach($orders[$key]->Order->items as $test){{ $test['qty'] }} X {{$test['item']->name}} {{$test['price']}},-<br>@endforeach</h6>
                        <h5>Comment:</h5>
                        <h6>{{$item->comment}}</h6>
                        <h5>Status:</h5>
                        <h6>{{ $item->Status }}</h6>
                        <h5>Placed on:</h5>
                        <h6>{{$item->created_at}}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    @else 
    <h3 class="text-center" style="margin-top: 20%;">U heeft nog geen order geplaatst</h3>
    @endif
@endsection