<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::check()){
            return view('home');
        } else{
            return redirect('/');
        }

    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            \Auth::login($credentials);

            return redirect('/home');
        }
    }

    public function logout(){
        \Auth::logout();
        return redirect('/');
    }

    public function account(){
        return view('account');
    }
}
