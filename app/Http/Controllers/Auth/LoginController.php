<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
   public function index(){
    return view('Auth.login');
   }

   public function store(Request $request){
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if(!auth()->attempt($request->only('email','password'), $request->remember)){
       return back()->with('status', 'Invalid login details');
    }
    
    return redirect()->route('redirects');
   }
   
public function authenticated(Request $request, $user)
{
    $request->session()->put('auth_time', time());
    return redirect()->intended($this->redirectPath());
}
}

