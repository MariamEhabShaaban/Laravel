<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function about()
    {
        // return view

        return view('theme.about');
    }

    public function contact()
    {
        // return view
        return view('theme.contact');
    }

    public function services()
    {
        // return view
        return view('theme.services');
    }

    public function store(FormContactRequest $request)
    {
        $validateData = $request->validated();


        // $validateData = $request->validate([
        //     'first-name' => ['required', 'string', 'min:5'],
        //     // or
        //     //'first-name'=>'required|string|min:5'
        //     'last-name' => ['required', 'string', 'min:5'],
        //     'email' => "required|email",
        //     "messege" => "nullable"
        // ], [
        //     'first-name.required' => 'My customize error'
        // ]);
        dd($validateData);
    }
}
