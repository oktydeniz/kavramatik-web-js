<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\ColorModel;
use Illuminate\Http\Request;

class Colors extends Controller
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
            $data = ColorModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->color_image	 = base64_encode($data[$i]->color_image	);
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
        /* $data = ColorModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->color_image	 = base64_encode($data[$i]->color_image	);
            }
            return $data; */
    }
}
