<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\ColorsModel;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ColorsModel::paginate(10);

        return view('back.allcolors.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.allcolors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->color->getRealPath();
        $logo = file_get_contents($path);

        $compOne = $request->color_one->getRealPath();
        $compTwo = $request->color_two->getRealPath();
        $compOneLogo =  file_get_contents($compOne);
        $compTwoLogo =  file_get_contents($compTwo);
        $color = new ColorsModel();
        $color->color_name = $request->color_name;
        $color->color_tag = $request->color_tag;
        $color->one_tag = $request->one_tag;
        $color->two_tag = $request->two_tag;
        $color->color_one = $compOneLogo;
        $color->color_two = $compTwoLogo;
        $color->color = $logo;
        $color->save();
        return redirect()->route('color.index')->withSuccess('Veri Eklendi');
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
        $data = ColorsModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return  view('back.allcolors.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ColorsModel::find($id);
        $data->color_name = $request->color_name;
        $data->color_tag = $request->color_tag;
        $data->one_tag = $request->one_tag;
        $data->two_tag = $request->two_tag;

        if ($request->hasFile('color')) {
            $path = $request->color->getRealPath();
            $logo = file_get_contents($path);
            $data->color = $logo;
        }

        if ($request->hasFile('color_one')) {
            $path = $request->color_one->getRealPath();
            $logo = file_get_contents($path);
            $data->color_one = $logo;
        }

        if ($request->hasFile('color_two')) {
            $path = $request->color_two->getRealPath();
            $logo = file_get_contents($path);
            $data->color_two = $logo;
        }
        $data->save();
        return redirect()->route('color.index')->withSuccess('Veri Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = ColorsModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $color->delete();
        return redirect()->route('color.index')->withSuccess('Veri silindi');
    }
}
