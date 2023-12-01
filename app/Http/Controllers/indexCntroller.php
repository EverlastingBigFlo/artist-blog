<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }

    public function galleries(){
        return view('galleries');
    }
    public function shop(){
        return view('shop');
    }
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
}