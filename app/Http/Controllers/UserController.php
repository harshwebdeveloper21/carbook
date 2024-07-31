<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function index(){
        $cars = car::all();
        return view('index',['car'=>$cars]);
        // return view('welcome');

    }
    

    public function login(){
        return view('registration');
    }

    public function UserLogin(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'address' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'phone' => 'required|numeric',
        ]);

        $user = User::create([
            'name' => $validatedData['username'],
            'email' => $validatedData['address'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
        ]);


        return response()->json(['msg' => 'success']);

    }

    public function singin(Request $request){

        $username = $request->post('username');
        $password = $request->post('password');
    
        $user = User::where('name', $username)->first();
    
        if ($user && Hash::check($password, $user->password)) {
            session(['user' => $user]);
            return response()->json(['msg' => 'success']);
        } else {
            return response()->json(['msg' => 'error', 'errors' => ['Invalid credentials']]);
        }

    }

    public function logout()
        {
            session()->forget('user');

            return response()->json(['msg' => 'logged out']);
        }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function price(){
        return view('pricing');
    }

   
}
