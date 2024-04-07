<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function index()
{
return view('index');
}
public function admin()
{
return view('admin');
}
public function login()
{
return view('login');
}
public function register()
{
return view('register');
}

// public function confirm(ContactRequest $request)
public function confirm(Request $request)
{
$contact = $request->only(['last_name','first_name', 'gender', 'email', 'tell','tell1','tell2','address', 'building', 'detail','content' ]);
return view('confirm', ['contact' => $contact]);
}

// public function store(ContactRequest $request)
public function store(Request $request)
{
$contact = $request->only(['last_name','first_name', 'gender', 'email', 'tell','tell1','tell2', 'address', 'building', 'detail','content' ]);
return view('thanks');
}
public function thanks()
{
    return view('index');
}
}
