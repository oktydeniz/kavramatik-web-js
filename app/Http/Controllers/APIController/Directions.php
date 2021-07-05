<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\DirectionModel;
use Illuminate\Http\Request;

class Directions extends Controller
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
            $data = DirectionModel::all();
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]->direction_image     = base64_encode($data[$i]->direction_image);
                if ($data[$i]->direction_two != null) {
                    $data[$i]->direction_two     = base64_encode($data[$i]->direction_two);
                }
            }
            return $data;
        }
        return [
            'result' => 'failed',
        ];
    }
}
