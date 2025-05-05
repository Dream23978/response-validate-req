<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|unique:users,email',
            'hp' => 'required|min:11',
            'message' => 'required',
        
        
        ]);

        return redirect() ->back() ->with('success','Pesan Anda Telah dikirim!');
    }
}
