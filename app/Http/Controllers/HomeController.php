<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('/home');
    }
    public function create(){
        return view('/home');
    }
    public function store (Request $request) {
        $newEntry = new Ingredients;
        $newEntry->nom = $request->nom;
        $newEntry->quantite = $request->quantite;
        $newEntry->url = $request->url;

        $newEntry->save();
        return redirect()->back();
    }
}