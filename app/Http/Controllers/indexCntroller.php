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
}