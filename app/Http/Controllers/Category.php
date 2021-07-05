<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {
        $table = CategoryModel::orderBy('order', 'ASC')->get();
        return  view('back.category', compact('table'));
    }
   
}
