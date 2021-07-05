<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateQuantitiyRequest;
use App\Http\Requests\UpdateQuantitiyRequest;
use App\Models\QuantitiyModel;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = QuantitiyModel::paginate(10);
        return view('back.quantitiy.quantitiy', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.quantitiy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuantitiyRequest $request)
    {
        $path = $request->quantitiy_one_image->getRealPath();
        $logo = file_get_contents($path);

        $path2 = $request->quantitiy_two_image->getRealPath();
        $logo2 = file_get_contents($path2);

        $quantitiy = new QuantitiyModel();
        $quantitiy->quantitiy_name = $request->quantitiy_name;
        $quantitiy->quantitiy_text = $request->quantitiy_text;
        $quantitiy->quantitiy_one_text = $request->quantitiy_one_text;
        $quantitiy->quantitiy_two_text = $request->quantitiy_two_text;
        $quantitiy->quantitiy_one_image = $logo;
        $quantitiy->quantitiy_two_image = $logo2;
        $quantitiy->save();
        return redirect()->route('miktarlar.index')->withSuccess('Veri Eklendi');;
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
        $data = QuantitiyModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        return view('back.quantitiy.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuantitiyRequest $request, $id)
    {
        $quantitiy = QuantitiyModel::find($id);
        $quantitiy->quantitiy_name = $request->quantitiy_name;
        $quantitiy->quantitiy_text = $request->quantitiy_text;
        $quantitiy->quantitiy_one_text = $request->quantitiy_one_text;
        $quantitiy->quantitiy_two_text = $request->quantitiy_two_text;

        if ($request->hasFile('quantitiy_one_image')) {
            $path = $request->quantitiy_one_image->getRealPath();
            $logo = file_get_contents($path);
            $quantitiy->quantitiy_one_image = $logo;
        }

        if ($request->hasFile('quantitiy_two_image')) {
            $path2 = $request->quantitiy_two_image->getRealPath();
            $logo2 = file_get_contents($path2);
            $quantitiy->quantitiy_two_image = $logo2;
        }
        $quantitiy->save();
        return redirect()->route('miktarlar.index')->withSuccess('Veri Güncelendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantity = QuantitiyModel::find($id) ?? abort(404, 'Veri Bulunamadı');
        $quantity->delete();
        return redirect()->route('miktarlar.index')->withSuccess('Veri Sİlindi');
    }
}
