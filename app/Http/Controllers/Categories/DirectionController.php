<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDirectionRequest;
use App\Http\Requests\UpdateDirectionRequest;
use App\Models\DirectionModel;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $table = DirectionModel::paginate(15);
        return view('back.directions.direction', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.directions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDirectionRequest $request)
    {
        $path = $request->direction_image->getRealPath();
        $logo = file_get_contents($path);

        


        $direction = new DirectionModel();
        $direction->direction_name = $request->direction_name;
        $direction->direction_text = $request->direction_text;
        $direction->direction_image = $logo;

        if ($request->hasFile('direction_two')){
            $path2 = $request->direction_two->getRealPath();
            $logo2 = file_get_contents($path2);
            $direction->direction_two = $logo2;
        }
        $direction->direction_two_text = $request->direction_two_text;


        $direction->save();
        return redirect()->route('yonler.index')->withSuccess('Veri Eklendi');
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
        $data = DirectionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return view('back.directions.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectionRequest $request, $id)
    {
        $data = DirectionModel::find($id);
        $data->direction_name = $request->direction_name;
        $data->direction_text = $request->direction_text;
        if ($request->hasFile('direction_image')) {
            $path = $request->direction_image->getRealPath();
            $logo = file_get_contents($path);
            $data->direction_image = $logo;
        }
        if ($request->hasFile('direction_two')) {
            $path = $request->direction_two->getRealPath();
            $logo = file_get_contents($path);
            $data->direction_two = $logo;
        }
        $data->direction_two_text = $request->direction_two_text;
        $data->save();
        return redirect()->route('yonler.index')->withSuccess('Veri Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direction = DirectionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $direction->delete();
        return redirect()->route('yonler.index')->withSuccess('Veri silindi');
    }
}
