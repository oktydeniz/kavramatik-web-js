<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class MainPage extends Controller
{
    public function index(){
        $table = CategoryModel::orderBy('order', 'ASC')->get();
        return  view('front.index', compact('table'));
    }
}
