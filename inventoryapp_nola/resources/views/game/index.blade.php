@extends('layouts.master')

@section('title')
    Tampil Game
@endsection

@section('content')
    @session('success')
        <div class="alert alert-success">{{$value}}</div>
    @endsession

    <a href="/game/create" class="btn btn-primary">Tambah</a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$game->name}}</td>
                <td>
                    <form action="/game/{{$game->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        
                        <a href="/game/{{$game->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/game/{{$game->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td>Tidak ada data game</td>
                </tr>
            @endforelse
        </tbody>
        </table>
@endsection