<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showBasketball() {
        return view ('layouts.basketball');
    }


    public function showJordan() {
        return view ('layouts.jordan');
    }

    public function storeItems(Request $request) {
        if($request->hasFile('filename')) {
            $products =new \App\Products;
            $imageName =$request->file('filename')->store('images');
            $products->name = $request->name;
            $products->price = $request->price;
            $products->stores = $request->stores;
            $products->type = $request->type;
            $products->image = $imageName;

            $products->save();

        }
        return redirect('/dashboard');
    }


    public function getShoes(Request $request) {
            $shoes = \App\Products::where('type', $request->type)->get();
            return response()->json(['shoes'=> $shoes]);

    }


    public function delShoes(Request $request) {
            $shoes = \App\Products::find($request->get('type'));
            $shoes->delete();
            $result = \App\Products::all();

            return view ('layouts.dashboard', ['shoes' => $result]);

    }

    public function editShoes(Request $request) {
        $shoes = \App\Products::find($request->get('id'));
        // $imageName =$request->file('filename')->store('images');
        $shoes->price = $request->price;
        $shoes->stores = $request->stores;
        // $shoes->image = $imageName;


        return response()->json(['shoes'=> $shoes]);

    }

    public function updateShoes(Request $request) {
        $shoes = \App\Products::find($request->id);
        $shoes->price = $request->price;
        $shoes->stores = $request->stores;
        $shoes->save();

        $result = \App\Products::all();

        return response()->json(['shoes'=> $result]);

    }


}
