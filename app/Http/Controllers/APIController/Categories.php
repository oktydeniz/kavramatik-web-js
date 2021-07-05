<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->token_id === '464685648465A468464qw8A544688648W6REEWT6V') {
            $data = CategoryModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->category_image = base64_encode($data[$i]->category_image);
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
    }
}
