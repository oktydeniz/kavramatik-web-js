<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColorModel;
use App\Http\Requests\CreateColorRequest;
use App\Http\Requests\UpdateColorRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ColorModel::paginate(10);

        return view('back.colors.color', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateColorRequest $request)
    {
        $path = $request->color_image->getRealPath();
        $logo = file_get_contents($path);
        $color = new ColorModel();
        $color->color_name = $request->color_name;
        $color->color_text = $request->color_text;
        $color->color_image = $logo;
        $color->save();
        return redirect()->route('renkler.index')->withSuccess('Veri Eklendi');
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
        $data = ColorModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return  view('back.colors.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColorRequest $request, $id)
    {
        $data = ColorModel::find($id);
        $data->color_name = $request->color_name;
        $data->color_text = $request->color_text;
        if ($request->hasFile('color_image')) {
            $path = $request->color_image->getRealPath();
            $logo = file_get_contents($path);
            $data->color_image = $logo;
        }
        $data->save();
        return redirect()->route('renkler.index')->withSuccess('Veri Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = ColorModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $color->delete();
        return redirect()->route('renkler.index')->withSuccess('Veri silindi');
    }
}
