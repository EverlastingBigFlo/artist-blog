<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
    public function index(){
        return view('welcome');
    }
}