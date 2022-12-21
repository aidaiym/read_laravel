<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function saveJson(Request $request)
    {
        $data = json_decode($request->getContent());
        dd($data);
    }
    
}
