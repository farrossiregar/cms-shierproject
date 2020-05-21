<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Tags;
use App\Models\Category;
use App\Models\Image;

class TagsController extends Controller
{

    public function index()
    {
        if(Session::get('login')){
            $params['data'] = Tags::orderBy('id', 'DESC')->get();
            return view('tags.index')->with($params);
        }else{
            return redirect('login');
        }
        
    }

    public function add(){
        if(Session::get('login')){
            return view('tags.create');
        }else{
            return redirect('login');
        }
    }

    public function edit($id)
    {
        if(Session::get('login')){
            $params['data']         = Tags::where('id', $id)->first();

            return view('tags.edit')->with($params);
        }else{
            return redirect('login');
        }
    }

    public function store(Request $request){
        if(Session::get('login')){
            $data =  new Tags();
            $data->title_tags           = $request->title;
            $data->url_tags             = str_replace(' ', '-', $request->title);
            $data->save();


            return redirect()->route('tags');
        }else{
            return redirect('login');
        }
        
    }

    public function delete($id){
        $data = Tags::where('id', $id)->first();
        $data->delete();

        return redirect()->route('tags');
    }

    public function update(Request $request, $id){
        $data = Tags::where('id', $id)->first();

        $data->title_tags           = $request->get('title');
        $data->url_tags             = str_replace(' ', '-', strtolower(date('ymd').'_'.$request->title));
        $data->save();

        return redirect()->route('tags');
    }


}