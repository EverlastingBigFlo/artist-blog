<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\subscribers;
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

    // subscribe
    public function subscribers(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'message' => 'required'
        ]);

        Subscribers::create($request->all());

        return redirect()->back()->with('message', 'Thank you for subscribing');
    }


    // register
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

    // to login 
    public function login()
    {
        return view('login');
    }


    public function loginCommand(Request $request)
    {
        // set my rules 
        $request->validate([

            'email' => 'required|email',
            'password' => 'required'
        ]);

        // get my database information to login

        $token = auth()->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($token) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('message', 'Invalid login');
        }
    }

    // to logout from my site
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login')->with('message', 'You have been logged out successfully.');
    }
}
