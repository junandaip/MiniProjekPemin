<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use app\Classes;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.    
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function fooExample()
    {
        return 'Example Controller from POST Request';
    }

    public function fooBar(Request $request)
    {
        return $request->path();
    }

    public function response()
    {
        $data['status'] = 'Success';
        return (new Response($data, 201))
            ->header('Content-Type', 'application/json');
    }
// //===============Pemint JSON========================//
//     public function showJson() 
//     {
//         $json = 
//         json_decode($json);
//     }
}
