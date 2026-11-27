@extends('layouts.master')

@section('title')
    Edit Category
@endsection

@section('content')
    <form action="/category/{{$category->id}}" method="POST">
        @csrf
        @method("PUT")

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Desciption</label>
            <textarea class="form-control" rows="3" name="description">{{$category->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection