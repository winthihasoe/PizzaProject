<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view('index');
    }

    function pizzas() {
        return view('pizzas');
    }

    function insert(Request $req){
        // validation 
        $validation=$req->validate([
            'username'=>'required',
            'pizza_name'=>'required',
            'topping'=>'required',
            'sauce'=>'required',
            'price'=>'required',
        ]);

        if($validation){
            //fill data to table
            $pizza=new Pizza();
            $pizza->username=$req->username;
            $pizza->pizza_name=$req->pizza_name;
            $pizza->topping=$req->topping;
            $pizza->sauce=$req->sauce;
            $pizza->price=$req->price;
            $pizza->save();

            // success msg
            return back()->with("success", "Thank You for Your Order");
        }else{

            // error message
            return back()->withErrors($validation);
        };
    }
}
