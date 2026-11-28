@extends('layouts.master')

@section('title')
    Detail Game
@endsection

@section('content')
    <h1 class="text-primary">{{$game->name}}</h1>
    <p>Gameplay : {{$game->gameplay}}</p>
    <p>Developer : {{$game->developer}}</p>
    <p>Year : {{$game->gameplay}}</p>

    <a href="/game" class="btn btn-primary">Kembali</a>
@endsection