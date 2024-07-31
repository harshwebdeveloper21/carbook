<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\car;
use App\Models\carbook;
class CarController extends Controller
{

    public function car(){
        $cars = car::all();
        $cars = Car::paginate(6);
        return view('car',['cars'=>$cars]);
    }

    public function carDetails($id){
        $car = car::find($id);
        
        return view('car-single',['car'=>$car]);
    }

    public function bookcar(){
        return view('booking');
    }

    
    public function search(Request $request)
        {
            $query = $request->input('search');       
            $cars = Car::where('name', 'like', '%' . $query . '%')->orWhere('price', 'like', '%' . $query . '%')->get();
            return response()->json(['cars' => $cars]);
    }
    
    public function carsearch(Request $request)
    {
        $rules = [
            'pickup_station' => 'required|string|max:255',
            'drop_station' => 'required|string|max:255',
            'book_date' => 'required',
            'book_off' => 'required',
            'time_pick' => 'required',
            'total_kilometer' => 'nullable|numeric',
            'mobile' => 'required|digits_between:10,15',
        ];
    
        $validator = Validator::make($request->all(), $rules);
            session()->put('searched_car', $request->all());

            if ($request->has('total_kilometer')) {
                session()->put('searched_car_rules', $rules);
            }

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
    
       $carbookid=CarBook::create($validator->validated());
        
        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully',
            'id' => $carbookid->id
        ], 200);
    }


    // public function carbooking($id){
    //     $data = CarBook::find($id);
    //     return view('car',['data'=>$data]);
    // }
}
