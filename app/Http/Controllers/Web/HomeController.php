<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        $data=food::all(); //all data in the food table are store in the $data variable
        return view('home', compact("data")); //return the view 'home' with the food's data that are in the $data variable.
    }

    public function redirects(){
       $data=food::all();
       $usertype= Auth::user()->usertype;
       if($usertype=="1"){
        return view('admin.dashboard.index');
       }
       else{
        return view('home', compact("data"));
       }
    }

}
