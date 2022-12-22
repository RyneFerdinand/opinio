<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getHomeCategories(){
        $categories = Category::skip(0)->take(10)->get();

        return $categories;
    }
}
