<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_arrivals = Products::orderBy('id','desc')->take(6)->get();
        $featured = Products::where('featured','1')->take(6)->get();
        
        return view('users.index')->with(['new_arrivals' => $new_arrivals,'featured' => $featured]);
    }

   
}
