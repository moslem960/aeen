@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-5">
            <div> ISBN : {{$products->ISBN}}</div>
            <div >description :{{$products->description}}</div>
            <div >Owner :{{$products->user->name}}</div>
            <p>
                category :
                @foreach($products->categories as $category)

                    {{$category->name.','}}

                @endforeach
            </p>

        </h1>
    </div>
@endsection

