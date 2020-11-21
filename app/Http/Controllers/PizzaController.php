<?php

namespace App\Http\Controllers;

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
            return back()->with("success", "Thank You for Your Order");
        }else{
            return back()->withErrors($validation);
        };
    }
}
