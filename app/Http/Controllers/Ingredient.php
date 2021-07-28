<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use Illuminate\Http\Request;

class Ingredient extends Controller
{
   public function index(){
       $data=Ingredients::all();
       return view('ingredient',compact('data'));
   }
   public function destroy (Ingredients $id) {
    $id->delete();
    return redirect('/Ingredients');
    }
    public function show (Ingredients $id){
        $item=$id;
        return view('showIngredients',compact('item'));
    }
}

