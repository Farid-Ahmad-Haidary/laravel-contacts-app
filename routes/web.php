<?php

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $contacts = Contact::all();
    return view('home', compact('contacts'));
})->name('index.home');


Route::get('/create', function () {
    return view('form');
})->name('index.create');



Route::post('/create', function (Request $request) {
       Contact::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
    ]);
    return redirect()->route('index.home')->with('success', 'Contact created successfully!');
})->name('create.post');


Route::fallback(function () {
    return "<h1 class='text-2xl font-bold text-gray-900'>404 Not Found</h1>";
});
