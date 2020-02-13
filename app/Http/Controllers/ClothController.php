<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    public function index()
    {
       $products = Cloth::all();
       return view('home',compact('products'));
    }
}
