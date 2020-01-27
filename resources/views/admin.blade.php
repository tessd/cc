@extends('layouts.app')

@section('content')
<div class="container center">
    <div class="text-center">
        <button class="btn btn-outline-info m-2" onclick="showOpen()">Show all open order's</button>
        <button class="btn btn-outline-info m-2" onclick="showAll()">Reset filter</button>
        <button class="btn btn-outline-info m-2" onclick="showClosed()">Show all closed order's</button>
    </div>
    <div class="row">
        @foreach($Info as $key => $item)
            <div class="card text-center col-md-4 @if($item->Status == 'open') order-first @else order-last @endif">
                    <div class="card-body">
                        <a class="close" onclick="return show_confirm();" style="color:red; position:absolute; top:10px; right:10px;" aria-label="Close" href="{{ route('adminDestroy', $item->id) }}">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h4>{{ $item->Name }}</h4>
                        <h5>{{ $item->Street }}</h5>
                        <h5>{{ $item->City }}</h5>
                        <h5>{{ $item->Zip_code }}</h5>
                        <h5>Order:</h5>
                        <h6>@foreach($Orders[$key]->Order->items as $test){{ $test['qty'] }} X {{$test['item']->name}} {{$test['price']}},-<br>@endforeach</h6>
                        <h5>Comment:</h5>
                        <h6>{{$item->comment}}</h6>
                        <h5>created:</h5>
                        <h6>{{$item->created_at}}</h6>
                        <h5>Time open:</h5>
                        @if($mytime->diffInMinutes($item->created_at) > 30)
                            <h6 style="color:red;">
                                {{$mytime->diffInMinutes($item->created_at)}} minutes {{$mytime->diffinSeconds($item->created_at) - $mytime->diffInMinutes($item->created_at) * 60 }} seconds
                            </h6>
                        @else
                            <h6 style="color:green;">
                                {{$mytime->diffInMinutes($item->created_at)}} minutes {{$mytime->diffinSeconds($item->created_at) - $mytime->diffInMinutes($item->created_at) * 60 }} seconds
                            </h6>
                        @endif
                        <h5>Status:</h5>
                        <h6>{{ $item->Status }}</h6>
                        <h5>Placed on:</h5>
                        <h6>{{$item->created_at}}</h6>
                        <a href="{{ route('adminUpdate', $item->id) }}" style="display: flex; flex-wrap: wrap; justify-content: center;" class="btn btn-warning">@if($item->Status == 'open')Finish order @else Re-open order @endif</a>
                    </div>
                </div>
        @endforeach
    </div>
</div>
<script>
    function showtime(a, time){
        let today = new Date();
        let ordercreated = new Date(time);
        let diffMs = (ordercreated - today);
        let minutes = Math.floor((diffMs/1000)/60);
        let timecreated = document.querySelector(".test" + a );
        console.log(minutes);
        if(minutes < -30){
            timecreated.style.color = "red";
        }
        else{
            timecreated.style.color = "green";
        }
        timecreated.innerHTML = minutes + "minutes";
    }


    function showOpen(){
        let closedCard = document.getElementsByClassName('order-last');
        let openCard = document.getElementsByClassName('order-first');
        for(let i = 0; i < closedCard.length; i++){
            closedCard[i].style.display  = "none";
        }
        for(let i = 0; i< openCard.length; i++){
            openCard[i].style.display    = "block";
        }
    }

    function showClosed(){
        let closedCard = document.getElementsByClassName('order-last');
        let openCard = document.getElementsByClassName('order-first');
        for(let i = 0; i < openCard.length; i++){
            openCard[i].style.display  = "none";
        }
        for(let i = 0; i < closedCard.length; i++){
            closedCard[i].style.display    = "block";
        }
    }

    function showAll(){
        let closedCard = document.getElementsByClassName('order-last');
        let openCard = document.getElementsByClassName('order-first');
        for(let i = 0; i < openCard.length; i++){
            openCard[i].style.display  = "block";
        }
        for(let i = 0; i < closedCard.length; i++){
            closedCard[i].style.display    = "block";
        }
    }

    function show_confirm() {
        const r = confirm("Are you sure you want to delete this order?");
        if (r === true) {
            return true;
        } else {
            return false;
        }
    }
</script>

@endsection

