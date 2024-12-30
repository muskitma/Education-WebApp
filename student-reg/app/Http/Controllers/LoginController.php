<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LoginController extends Controller
{
    public function login(Request $request) {
        return view('hi');
    }
    public function checkLogin(Request $request){
        // dd($request->all());
        Post::create($request->all());
        return redirect()->route('wed');
    }
}
