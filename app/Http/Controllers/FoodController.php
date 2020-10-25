<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food()
    {
        return view('menu.food');
    }
}
