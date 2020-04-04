<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        if(Session::get('login')){
            $params['data'] = Category::all();
            return view('category.index')->with($params);
        }else{
            return redirect('login');
        }
        
    }

    public function add(){
        if(Session::get('login')){
            return view('category.create');
        }else{
            return redirect('login');
        }
        
    }

    public function store(Request $request){
        if(Session::get('login')){
            $data                   =  new Category();
            $data->title            = $request->get('title');
            $data->status           = $request->get('status');
            $data->save();

            return redirect()->route('category');
        }else{
            return redirect('login');
        }
        
    }

    public function edit($id)
    {
        if(Session::get('login')){
            $params['data'] = Category::where('id', $id)->first();
            return view('category.edit')->with($params);
        }else{
            return redirect('login');
        }
        
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