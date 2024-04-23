<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = news::all();

        return view('pages.news', compact('news'));
    }

    public function show(Request $request){
        $id = $request->id;

        $new = news::query()->where('id', '=', $id)->get();
        return view('pages.new', compact('new'));
    }
}
