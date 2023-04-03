<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Models\feedback;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->only(['index', 'customLogin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Display Login Page
    public function index()
    {
        return view('auth.login');
    }
    public function Admin_Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        if(Auth::check()){
            $feedback = feedback::latest('id')->limit(3)->get();
            return view('layouts.admin.app', compact('feedback'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
