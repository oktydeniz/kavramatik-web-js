<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateShapeRequest;
use App\Http\Requests\UpdateShapeRequest;
use App\Models\ShapeModel;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ShapeModel::paginate(10);
        return view('back.shapes.shape', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.shapes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateShapeRequest $request)
    {
        $path = $request->shape_image->getRealPath();
        $logo = file_get_contents($path);

     

        $shape = new ShapeModel();
        $shape->shape_name = $request->shape_name;
        $shape->shape_text = $request->shape_text;
        $shape->shape_two_text = $request->shape_two_text;

        if ($request->hasFile('shape_two_image')){
            $path2 = $request->shape_two_image->getRealPath();
            $logo2 = file_get_contents($path2);
            $shape->shape_two_image = $logo2;
        }
        $shape->shape_image = $logo;
        
        $shape->save();
        return redirect()->route('sekiller.index')->withSuccess('Veri Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ShapeModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return  view('back.shapes.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShapeRequest $request, $id)
    {
        $data = ShapeModel::find($id);
        $data->shape_name = $request->shape_name;
        $data->shape_text = $request->shape_text;
        if ($request->hasFile('shape_image')) {
            $path = $request->shape_image->getRealPath();
            $logo = file_get_contents($path);
            $data->shape_image = $logo;
        }
        if ($request->hasFile('shape_two_image')) {
            $path = $request->shape_two_image->getRealPath();
            $logo = file_get_contents($path);
            $data->shape_two_image = $logo;
        }
        $data->shape_two_text = $request->shape_two_text;
        $data->save();
        return redirect()->route('sekiller.index')->withSuccess('Veri Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy($id)
    {
        $shape = ShapeModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $shape->delete();
        return redirect()->route('sekiller.index')->withSuccess('Veri silindi');
    }
}
