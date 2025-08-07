<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;
use App\Models\Category;
use App\Models\Contact;
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
        // get all contact and view
        // $data = Contact::where('id', '=', '1')->first();
        // $contact = new Contact();
        // $contact->first_name = 'Menna';
        // $contact->last_name = 'Ehab';
        // $contact->status = 1;
        // $contact->email = 'menna@gmail.com';
        // $contact->message = 'hello I am Menna';
        // $contact->save();

        // Contact::create([
        //     'first_name' => 'Malak',
        //     'last_name' => 'Ehab',
        //     'email' => 'malak@gmail.com',
        //     'message' => 'Hello I am Malak'
        // ]);

        // update contact
        // get categories
        // $categories = Category::all();
        // // return view
        // return view('theme.contact', compact('categories'));
        $contact = Contact::find(11);
        dd($contact->category->name);
    }

    public function services()
    {
        // return view
        return view('theme.services');
    }

    public function store(FormContactRequest $request)
    {
        $validateData = $request->validated();

        Contact::create($validateData);

        return back()->with('status', 'Message was sent successfully');
    }


    public function display()
    {
        // return view
        $data = Contact::paginate(5);
        return view('theme.display-contact', compact('data'));
    }

}
