<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
//
    public function index()
    {
        return view('Auth.register');
    }
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        $user = new User; //here a new user object is created using the User model
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);

        // Save the user to the database
        $user->save();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       auth()->attempt($request->only('email','password'));

        // Redirect to a success page or do something else
        return redirect()->route('admin.dashboard');
    }
}
