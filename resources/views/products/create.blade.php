@extends('layouts.app')
@section('create')
    <div class="container">

        <h5 class="card-title">create book</h5>

        <form  method="post" action="{{route('products.store')}}">
            {{csrf_field()}}
            <h1>Create Post</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="name">name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="name">
            </div>
            <div class="form-group">
                <label for="pages">description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}" placeholder="description">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN:</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{old('ISBN')}}" placeholder="ISBN">
            </div>
            <div class="form-group">
                <label for="price">price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}" placeholder="price">
            </div>


            <div class="form-group">
                <label for="category">category:</label>
                <select name="category_id[]" id="category" class="form-control" multiple>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" name="save" class="btn-success"  >save</button>

        </form>
    </div>

@endsection

