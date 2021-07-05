<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOppositeRequest;
use App\Http\Requests\UpdateOppositeRequest;
use App\Models\OppositeModel;

class OppositeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = OppositeModel::paginate(10);
        return view('back.opposite.opposite', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.opposite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOppositeRequest $request)
    {
        $path = $request->opposite_one_image->getRealPath();
        $logo = file_get_contents($path);

        $path2 = $request->opposite_two_image->getRealPath();
        $logo2 = file_get_contents($path2);

        $opposite = new OppositeModel();
        $opposite->opposite_name = $request->opposite_name;
        $opposite->opposite_one_image_text = $request->opposite_one_image_text;
        $opposite->opposite_two_image_text = $request->opposite_two_image_text;
        $opposite->opposite_one_image = $logo;
        $opposite->opposite_two_image = $logo2;
        $opposite->save();
        return redirect()->route('zit_kavramlar.index')->withSuccess('Veri Eklendi');
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
        $data = OppositeModel::find($id) ?? abort(404, 'Veri Bulunmadı');
        return view('back.opposite.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOppositeRequest $request, $id)
    {
        $opposite = OppositeModel::find($id);
        $opposite->opposite_name = $request->opposite_name;
        $opposite->opposite_one_image_text = $request->opposite_one_image_text;
        $opposite->opposite_two_image_text = $request->opposite_two_image_text;

        if ($request->hasFile('opposite_one_image')) {
            $path = $request->opposite_one_image->getRealPath();
            $logo = file_get_contents($path);
            $opposite->opposite_one_image = $logo;
        }
        if ($request->hasFile('opposite_two_image')) {
            $path2 = $request->opposite_two_image->getRealPath();
            $logo2 = file_get_contents($path2);
            $opposite->opposite_two_image = $logo2;
        }

        $opposite->save();
        return redirect()->route('zit_kavramlar.index')->withSuccess('Veri Eklendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opposite = OppositeModel::find($id) ?? abort(404, 'Veri Bulunmadı');
        $opposite->delete();
        return redirect()->route('zit_kavramlar.index')->withSuccess('Veri Silindi');
    }
}
