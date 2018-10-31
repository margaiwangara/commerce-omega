<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_arrivals = Products::orderBy('id','desc')->take(8)->get();
        $featured = Products::where('featured','1')->take(8)->get();
        
        return view('users.index')->with(['new_arrivals' => $new_arrivals,'featured' => $featured]);
    }

    
}
