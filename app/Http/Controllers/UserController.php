<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
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
                'address' => 'required|email|unique:users,email', 
                'password' => 'required|min:8|confirmed',
                'phone' => 'required|numeric',
            ]);
        
            try {
                $user = User::create([
                    'name' => $validatedData['username'],
                    'email' => $validatedData['address'],
                    'password' => Hash::make($validatedData['password']),
                    'phone' => $validatedData['phone'],
                ]);

                return response()->json(['msg' => 'success']);
            } catch (QueryException $e) {
                if ($e->getCode() === '23000') { 
                    return response()->json(['msg' => 'error', 'message' => 'Email already exists.'], 409);
                } else {
                    return response()->json(['msg' => 'error', 'message' => 'Database error.'], 500);
                }
            } catch (\Exception $e) {
                return response()->json(['msg' => 'error', 'message' => 'An unexpected error occurred.'], 500);
            }

    }

    public function singin(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
    
        $user = User::where('name', $request->name)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            // Generate token
            $token = $user->createToken('MyApp')->accessToken;
            if($token){                
            return response()->json(['msg' => 'success'], 200);
            }
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function logout()
        {
            session()->forget('name');
            session()->forget('email');

            return view('registration');
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
