<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            return redirect("/dashboard");
        }

        return view('auth.login');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(auth()->user()->role==1){
                return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
            }
            return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        }

        $errors= "Oppes! You have entered invalid credentials";
        return redirect()->back()->withErrors($errors);
    }


    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }



    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile_number'=> "none1",
        'password' => Hash::make($data['password'])
      ]);
    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
