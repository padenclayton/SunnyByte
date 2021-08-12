<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function __construct()
    {
        //
    }

    public function index(Request $request){

        $response = ['ip' => $request->ip()];
        if($request->name){
            $response['greeting'] = $request->name;
        }
        return response()->json($response)->header('x-hello-world', 'Init Value');
    }
}
