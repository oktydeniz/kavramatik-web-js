<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\OppositeModel;
use Illuminate\Http\Request;

class Opposites extends Controller
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
            $data = OppositeModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->opposite_one_image     = base64_encode($data[$i]->opposite_one_image);
                $data[$i]->opposite_two_image     = base64_encode($data[$i]->opposite_two_image);
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
    }
}
