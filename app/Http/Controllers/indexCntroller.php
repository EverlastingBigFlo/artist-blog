<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home');
    }

    public function galleries()
    {
        return view('galleries');
    }
    public function shop()
    {
        return view('shop');
    }
    public function register()
    {
        return view('register');
    }
    // to post and connect to database
    public function registerCommand(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        // to send my request to the database
        User::create($request->all());

        return redirect()->back()->with('message', 'Account Registered Successfull');
    }

    public function login()
    {
        return view('login');
    }

    public function loginCommand(Request $request)
    {
        $request->validate([

            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        return 'welcome';
    }
}
