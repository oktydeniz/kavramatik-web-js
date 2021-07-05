<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\DimensionModel;
use Illuminate\Http\Request;

class Dimensions extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->token_id === '464685648465A468464qw8A544688648W6REEWT6V') {
            $data = DimensionModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->dimension_one_image	 = base64_encode($data[$i]->dimension_one_image	);
                $data[$i]->dimension_two_image	 = base64_encode($data[$i]->dimension_two_image	);
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
    }
}
