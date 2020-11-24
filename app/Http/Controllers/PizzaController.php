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
        // $pizzas=[
        //     ['id'=>1,'username'=>'Aung','pizza_name'=>'Chicken tikka','topping'=>'Spicy cheese','sauce'=>'tomato','price'=>3.99],
        //     ['id'=>1,'username'=>'Kyaw','pizza_name'=>'Chicken Masala','topping'=>'Sweet cheese','sauce'=>'Garlic','price'=>4.99],
        //     ['id'=>1,'username'=>'Maung Maung','pizza_name'=>'Pork tikka','topping'=>'Spicy cheese','sauce'=>'tomato','price'=>6.99]
        // ];

        // send data from database to blade file 
        $pizzas=Pizza::all();
        // send data to blade file 
        return view('pizzas',['pizzas'=>$pizzas]);
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

    function delete($id){
        // return 'delete';
        // return $id;

        // find by ID
        $delete_pizza_data=Pizza::find($id);

        // delete by ID 
        $delete_pizza_data->delete();

        return back()->with('delete', "$delete_pizza_data->username Order is deleted");
    }
}
