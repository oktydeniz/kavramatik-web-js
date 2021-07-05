<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDimensionRequest;
use App\Http\Requests\UpdateDimensionRequest;
use App\Models\DimensionModel;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = DimensionModel::paginate(15);
        return view('back.dimensions.dimension', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.dimensions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDimensionRequest $request)
    {
        $path = $request->dimension_one_image->getRealPath();
        $logo = file_get_contents($path);

        $path2 = $request->dimension_two_image->getRealPath();
        $logo2 = file_get_contents($path2);
        $dimension = new DimensionModel();
        $dimension->dimension_name = $request->dimension_name;
        $dimension->dimension_text = $request->dimension_text;
        $dimension->dimension_one_text = $request->dimension_one_text;
        $dimension->dimension_two_text = $request->dimension_two_text;
        $dimension->dimension_one_image = $logo;
        $dimension->dimension_two_image = $logo2;
        $dimension->save();
        return redirect()->route('boyutlar.index')->withSuccess('Veri Eklendi');
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
        $data = DimensionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return  view('back.dimensions.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDimensionRequest $request, $id)
    {
        $dimension = DimensionModel::find($id);
        $dimension->dimension_name = $request->dimension_name;
        $dimension->dimension_text = $request->dimension_text;
        $dimension->dimension_one_text = $request->dimension_one_text;
        $dimension->dimension_two_text = $request->dimension_two_text;
        if ($request->hasFile('dimension_one_image')) {
            $path = $request->dimension_one_image->getRealPath();
            $logo = file_get_contents($path);
            $dimension->dimension_one_image = $logo;
        }

        if ($request->hasFile('dimension_two_image')) {
            $path2 = $request->dimension_two_image->getRealPath();
            $logo2 = file_get_contents($path2);
            $dimension->dimension_two_image = $logo2;
        }
        $dimension->save();
        return redirect()->route('boyutlar.index')->withSuccess('Veri Güncelendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dimension = DimensionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $dimension->delete();
        return redirect()->route('boyutlar.index')->withSuccess('Veri silindi');
    }
}
