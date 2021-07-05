<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNumberRequest;
use App\Http\Requests\UpdateNumberRequest;
use App\Models\DimensionModel;
use App\Models\NumberModel;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = NumberModel::paginate(15);
        return view('back.numbers.number', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNumberRequest $request)
    {
        $path = $request->number_one_image->getRealPath();
        $logo = file_get_contents($path);

        $number = new NumberModel();
        $number->number_name = $request->number_name;
        $number->number_one_text = $request->number_one_text;
     
        $number->number_one_image = $logo;
        $number->save();
        return redirect()->route('sayilar.index')->withSuccess('Veri Eklendi');
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
        $data = NumberModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return view('back.numbers.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNumberRequest $request, $id)
    {
        $number = NumberModel::find($id);
        $number->number_name = $request->number_name;
        $number->number_one_text = $request->number_one_text;
        if ($request->hasFile('number_one_image')) {
            $path = $request->number_one_image->getRealPath();
            $logo = file_get_contents($path);
            $number->number_one_image = $logo;
        }
       
        $number->save();
        return redirect()->route('sayilar.index')->withSuccess('Veri Eklendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number = NumberModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $number->delete();
        return redirect()->route('sayilar.index')->withSuccess('Veri silindi');
    }
}
