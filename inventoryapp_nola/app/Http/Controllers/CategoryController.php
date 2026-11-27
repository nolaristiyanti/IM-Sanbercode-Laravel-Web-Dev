<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $request->validate([
            "name" => ["required", "max:255", "min:5"],
            "description" => ["required"]
        ], [
            "required" => "Inputan :attribute wajib diisi",
            "max" => "Inputan :attribute maksimal :max karakter",
            "min" => "Inputan :attribute minimal :min karakter",
        ]);

        $now = Carbon::now();

        DB::table("categories")->insert([
            "name" => $request->name,
            "description" => $request->description,
            "created_at" => $now,
            "updated_at" => $now,
        ],);

        return redirect("/category")->with("success", "Category berhasil ditambah");
    }

    public function index() {
        $categories = DB::table("categories")->get();

        // return $categories;
        return view('category.show', ["categories" => $categories]);
    }

    public function show($id) {
        $category = DB::table("categories")->where("id", $id)->first();

        // return $category;
        return view('category.detail', ["category" => $category]);
    }

    public function edit($id) {
        $category = DB::table("categories")->where("id", $id)->first();

        // return $category;
        return view('category.edit', ["category" => $category]);
    }

    public function update($id, Request $request) {
        $request->validate([
            "name" => ["required", "max:255", "min:5"],
            "description" => ["required"]
        ], [
            "required" => "Inputan :attribute wajib diisi",
            "max" => "Inputan :attribute maksimal :max karakter",
            "min" => "Inputan :attribute minimal :min karakter",
        ]);

        $now = Carbon::now();

        DB::table("categories")->where("id", $id)->update([
            "name" => $request->name,
            "description" => $request->description,
            "updated_at" => $now
        ]);

        return redirect("/category")->with("success", "Category berhasil diupdate");
    }

    public function destroy($id) {
        DB::table("categories")->where("id", $id)->delete();

        return redirect("/category")->with("success", "Category berhasil dihapus");
    }
}
