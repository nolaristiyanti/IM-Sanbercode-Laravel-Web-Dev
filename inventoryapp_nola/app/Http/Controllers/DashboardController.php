<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function welcome(Request $request) {
        $fullname = $request->firstname . " " . $request->lastname;
        return view('welcome', ["fullname" => $fullname]);
    }
}
