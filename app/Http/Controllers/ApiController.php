<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExtraData;

class ApiController extends Controller
{
    public function getData(Request $request)
    {
        return response()->json(['data' => ExtraData::all()]);
    }

    public function postData(Request $request)
    {
        $data = [
            'created_by' => $request->ip(),
            'extra' => $request->all()
        ];
        ExtraData::create([
            'extra_data' => json_encode($data)
        ]);
    }
}
