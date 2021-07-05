<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\APIController\Colors;
use App\Http\Controllers\Controller;
use App\Models\ColorModel;
use App\Models\DimensionModel;
use App\Models\DirectionModel;
use App\Models\EmotionModel;
use App\Models\NumberModel;
use App\Models\OppositeModel;
use App\Models\QuantitiyModel;
use App\Models\SenseModel;
use App\Models\ShapeModel;
use Illuminate\Http\Request;

class FrontCategories extends Controller
{
    public function renkler()
    {
        $data = ColorModel::all();
        return view('front.colors', compact('data'));
    }
    public function sekiller()
    {
        $data = ShapeModel::all();
        return view('front.shapes', compact('data'));
    }
    public function miktarlar()
    {
        $data = QuantitiyModel::all();
        return view('front.quantity', compact('data'));
    }
    public function karsilastirmalar()
    {
        $data = OppositeModel::all();
        return view('front.opposite', compact('data'));
    }
    public function boyutlar()
    {
        $data = DimensionModel::all();
        return view('front.dimension', compact('data'));
    }
    public function konumlar()
    {
        $data = DirectionModel::all();
        return view('front.direction', compact('data'));
    }
    public function rakamlar()
    {
        $data = NumberModel::all();
        return view('front.number', compact('data'));
    }
    public function duyular()
    {
        $data = SenseModel::all();
        return view('front.sense', compact('data'));
    }
    public function duygular()
    {
        $data = EmotionModel::all();
        return view('front.emotion', compact('data'));
    }
}
