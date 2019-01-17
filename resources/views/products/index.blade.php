@extends('layouts.app')
@section('content')
    <div class="container col-md-5">
        <table class="table">

            <tr>
                <th>
                    product name
                </th>
                <th>
                    Creator
                </th>
                <th>
                    action
                </th>
            </tr>

            @foreach($products as $product)
                <tr>
                    <td>
                        <a href={{"/products/".$product->id}}->{{$product->name}}</a>
                    </td>
                    <td>
                        {{$product->user->name}}
                    </td>
                    @can('update',$product)
                        <td>
                            <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-primary">update</a>
                        </td>
                    @endcan


                    <td></td>

                </tr>
            @endforeach
        </table>

        <a href="{{route('products.create')}}" class="btn btn-success btn-block">create</a>


    </div>
@endsection
