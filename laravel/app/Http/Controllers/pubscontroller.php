<?php

namespace App\Http\Controllers;

use App\Models\pubs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pubscontroller extends Controller
{
    //
    public function index()
{
    $posts = DB::table('pubs')->get();
    return view('welcome', ['posts' => $posts]);
    // return view('welcome', $posts);
}
}
