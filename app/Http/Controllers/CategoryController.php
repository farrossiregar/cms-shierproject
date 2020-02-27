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
        $data                   =  new Category();
        $data->title            = $request->get('title');
        $data->status           = $request->get('status');
        $data->save();

        return redirect()->route('category');
    }

    public function edit($id)
    {
        $params['data'] = Category::where('id', $id)->first();
        return view('category.edit')->with($params);
    }

    public function update(Request $request, $id)
    {
        $data           = Category::where('id', $id)->first();
        $data->title    = $request->get('title');
        $data->status   = $request->get('status');
        $data->save();

        return redirect()->route('category');
    }
}