<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColorModel;
use App\Models\DimensionModel;
use App\Models\DirectionModel;
use App\Models\EmotionModel;
use App\Models\NumberModel;
use App\Models\OppositeModel;
use App\Models\QuantitiyModel;
use App\Models\SenseModel;
use App\Models\ShapeModel;
class TraningContolrller extends Controller
{
    public function renkler()
    {
        $data = ColorModel::all();
        return view('traning.colors', compact('data'));
        
    }
    public function sekiller()
    {
        $data = ShapeModel::all();
        return view('traning.shapes', compact('data'));
    }
    public function miktarlar()
    {
        $data = QuantitiyModel::all();
        return view('traning.quantity', compact('data'));
    }
    public function karsilastirmalar()
    {
        $data = OppositeModel::all();
        return view('traning.opposite', compact('data'));
    }
    public function boyutlar()
    {
        $data = DimensionModel::all();
        return view('traning.dimension', compact('data'));
    }
    public function konumlar()
    {
        $data = DirectionModel::all();
        return view('traning.direction', compact('data'));
    }
    public function rakamlar()
    {
        $data = NumberModel::all();
        return view('traning.number', compact('data'));
    }
    public function duyular()
    {
        $data = SenseModel::all();
        return view('traning.sense', compact('data'));
    }
    public function duygular()
    {
        $data = EmotionModel::all();
        return view('traning.emotion', compact('data'));
    }
}
