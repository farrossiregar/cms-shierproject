<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $params['data'] = Category::all();
        return view('category.index')->with($params);
    }

    public function add(){
        return view('category.create');
    }

    public function store(Request $request){
        $data =  new Category();
        $data->title            = $request->get('title');
        $data->status           = $request->get('status');
        $data->save();

        return redirect()->route('category');
    }

    public function edit()
    {
        echo "test";
        //return view('article.index');
    }
}