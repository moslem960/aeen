@extends('layouts.app')
@section('content')
    @foreach($products as $product)
        <div>

            <p>creator : {{$products->user->name}}</p>
            <a href={{"/products"}}>

            </a>
        </div>
        @endforeach
    @endsection