<?php

namespace App\Http\Controllers;

use App\Models\infrmation;
use Illuminate\Http\Request;

class InfrmationController extends Controller
{
    public function index(){
        $informations = infrmation::all();

        return view('pages.informations', compact('informations'));
    }

    public function show(Request $request){
        $id = $request->id;

        $information = infrmation::query()->where('id', '=', $id)->get();
        return view('pages.information', compact('information'));
    }
}
