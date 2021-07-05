<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSenseRequest;
use App\Http\Requests\UpdateSenseRequest;
use App\Models\SenseModel;

class SenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = SenseModel::paginate(10);
        return view('back.senses.sense', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.senses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSenseRequest $request)
    {
        $path = $request->sense_one_image->getRealPath();
        $logo = file_get_contents($path);

        $path2 = $request->sense_two_image->getRealPath();
        $logo2 = file_get_contents($path2);

        $sense = new SenseModel();
        $sense->sense_name = $request->sense_name;
        $sense->sense_one_image_text = $request->sense_one_image_text;
        $sense->sense_two_image_text = $request->sense_two_image_text;

        $sense->sense_one_image = $logo;
        $sense->sense_two_image = $logo2;
        $sense->save();
        return redirect()->route('duyular.index')->withSuccess('Veri Eklendi');
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
        $data = SenseModel::find($id) ?? abort(404, 'Veri Bulunmadı');
        return view('back.senses.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSenseRequest $request, $id)
    {
        $sense = SenseModel::find($id);
        $sense->sense_name = $request->sense_name;
        $sense->sense_one_image_text = $request->sense_one_image_text;
        $sense->sense_two_image_text = $request->sense_two_image_text;

        if ($request->hasFile('sense_one_image')) {
            $path = $request->sense_one_image->getRealPath();
            $logo = file_get_contents($path);
            $sense->sense_one_image = $logo;
        }
        if ($request->hasFile('sense_two_image')) {
            $path2 = $request->sense_two_image->getRealPath();
            $logo2 = file_get_contents($path2);
            $sense->sense_two_image = $logo2;
        }

        $sense->save();
        return redirect()->route('duyular.index')->withSuccess('Veri Eklendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sense = SenseModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $sense->delete();
        return redirect()->route('duyular.index')->withSuccess('Veri Silindi');
    }
}
