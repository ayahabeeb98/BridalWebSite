<?php

namespace App\Http\Controllers;

use App\Category;
use App\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HallController extends Controller
{

    public function index($category_id = null)
    {

        if ($category_id == null){
            $halls = Hall::all();
            return view('hall.index', compact('halls'));
        }else{
            $categories = Category::find($category_id);

            $halls = $categories->halls()->get();
            return view('hall.index', compact('halls','categories'));
        }


    }
}
