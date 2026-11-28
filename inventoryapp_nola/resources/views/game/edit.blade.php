@extends('layouts.master')

@section('title')
    Edit Game
@endsection

@section('content')
    <form action="/game/{{$game->id}}" method="POST">
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
            <input type="text" class="form-control" name="name" value="{{$game->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Gameplay</label>
            <textarea class="form-control" rows="3" name="gameplay">{{$game->gameplay}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Developer</label>
            <input type="text" class="form-control" name="developer" value="{{$game->developer}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" class="form-control" name="year" value="{{$game->year}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection