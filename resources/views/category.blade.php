@extends('layouts.app')

@section('content')
    <div class="container center">
        <div class="row">
        @foreach($category as $categorie)
            <div class="card col-sm-4" style="padding:10px;">
                <div class="card-body">
                    <h2 class="card-title"><a style="color:black; :hover:gray;"
                        href="{{ action('ProductController@show', $categorie['id']) }}">{{ $categorie->name }}</a></h2>
                </div>
            </div>
        @endforeach
        </div>
    </div>

@endsection