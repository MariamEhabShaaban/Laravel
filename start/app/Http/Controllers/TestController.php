<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function mariam(Request $request){
        dd($request->only(['name','age']));
        dd('mariooma');
    }

    public function printName($name='default'){
        dd("Hello $name ");
    }
}
