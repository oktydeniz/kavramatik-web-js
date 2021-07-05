<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\ColorsModel;
use Illuminate\Http\Request;

class AllColors extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->token_id === '464685648465A468464qw8A544688648W6REEWT6V') {
            $data = ColorsModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->color     = base64_encode($data[$i]->color);
                $data[$i]->color_one     = base64_encode($data[$i]->color_one);
                $data[$i]->color_two     = base64_encode($data[$i]->color_two);
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
    }
}
