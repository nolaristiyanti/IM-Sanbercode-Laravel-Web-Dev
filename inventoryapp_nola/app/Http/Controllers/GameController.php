<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function create() {
        return view('game.create');
    }

    public function store(Request $request) {
        $request->validate([
            "name" => ["required", "max:45", "min:5"],
            "gameplay" => ["required"],
            "developer" => ["required", "max:45", "min:5"],
            "year" => ["required"],
        ], [
            "required" => "Inputan :attribute wajib diisi",
            "max" => "Inputan :attribute maksimal :max karakter",
            "min" => "Inputan :attribute minimal :min karakter",
        ]);

        $now = Carbon::now();

        DB::table("game")->insert([
            "name" => $request->name,
            "gameplay" => $request->gameplay,
            "developer" => $request->developer,
            "year" => $request->year,
            "created_at" => $now,
            "updated_at" => $now,
        ],);

        return redirect("/game")->with("success", "Game berhasil ditambah");
    }

    public function index() {
        $games = DB::table("game")->get();

        // return $games;
        return view('game.index', ["games" => $games]);
    }

    public function show($id) {
        $game = DB::table("game")->where("id", $id)->first();

        // return $game;
        return view('game.show', ["game" => $game]);
    }

    public function edit($id) {
        $game = DB::table("game")->where("id", $id)->first();

        // return $game;
        return view('game.edit', ["game" => $game]);
    }

    public function update($id, Request $request) {
        $request->validate([
            "name" => ["required", "max:45", "min:5"],
            "gameplay" => ["required"],
            "developer" => ["required", "max:45", "min:5"],
            "year" => ["required"],
        ], [
            "required" => "Inputan :attribute wajib diisi",
            "max" => "Inputan :attribute maksimal :max karakter",
            "min" => "Inputan :attribute minimal :min karakter",
        ]);

        $now = Carbon::now();

        DB::table("game")->where("id", $id)->update([
            "name" => $request->name,
            "gameplay" => $request->gameplay,
            "developer" => $request->developer,
            "year" => $request->year,
            "updated_at" => $now
        ]);

        return redirect("/game")->with("success", "Game berhasil diupdate");
    }

    public function destroy($id) {
        DB::table("game")->where("id", $id)->delete();

        return redirect("/game")->with("success", "Game berhasil dihapus");
    }
}
