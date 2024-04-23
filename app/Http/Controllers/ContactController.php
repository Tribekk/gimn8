<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = contact::all();
        return view('pages.contact', compact('contact'));
    }
}
