<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController2 extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('profile',['user'=>$user]);

}
}
