<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmotionRequest;
use App\Http\Requests\UpdateEmotionRequest;
use App\Models\EmotionModel;
use Illuminate\Http\Request;

class EmotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = EmotionModel::paginate(10);
        return view('back.emotion.emotion', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.emotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmotionRequest $request)
    {
        $path = $request->emotion_image->getRealPath();
        $logo = file_get_contents($path);
        $emotion = new EmotionModel();
        $emotion->emotion_name = $request->emotion_name;
        $emotion->emotion_text = $request->emotion_text;
        $emotion->emotion_image = $logo;
        //return 'deneme';
        $emotion->save();
        return redirect()->route('duygular.index')->withSuccess('Veri Eklendi');;
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
        $data = EmotionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return  view('back.emotion.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmotionRequest $request, $id)
    {
        $data = EmotionModel::find($id);
        $data->emotion_name = $request->emotion_name;
        $data->emotion_text = $request->emotion_text;
        if ($request->hasFile('emotion_image')) {
            $path = $request->emotion_image->getRealPath();
            $logo = file_get_contents($path);
            $data->emotion_image = $logo;
        }
        $data->save();
        return redirect()->route('duygular.index')->withSuccess('Veri Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emotion = EmotionModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $emotion->delete();
        return redirect()->route('duygular.index')->withSuccess('Veri silindi');
    }
}
