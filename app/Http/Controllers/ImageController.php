<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ImageController extends Controller
{

    public function index()
    {
        $params['data'] = Article::all();
        return view('article.index')->with($params);
    }

    public function add(){
        return view('article.create');
    }

    public function store(Request $request){
        $data =  new Article();
        $data->title            = "Judul1";
        $data->description      = "Desc1";
        $data->source           = "sourcec1";
        $data->image_source     = "image_source1";
        $data->image_caption    = "image_caption1";
        $data->link             = "link1";
        $data->alias            = "alias1";
        $data->save();

        echo "test";
        //return redirect()->route('article.index');
    }

    public function edit()
    {
        echo "test";
        //return view('article.index');
    }
}