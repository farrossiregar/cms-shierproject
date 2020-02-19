<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{

    public function index()
    {
        $params['data'] = Article::all();
        return view('article.index')->with($params);
    }

    public function add(){
        return view('article.create');
    }

    public function edit($alias)
    {
        $params['data'] = Article::where('alias', $alias)->first();
        return view('article.edit')->with($params);
    }

    public function store(Request $request){
        $data =  new Article();
        $data->title                = $request->title;
        $data->description          = $request->description_article;
        $data->source               = $request->source;
        $data->category_id          = $request->category_id;
        $data->link                 = $request->link;
        $data->alias                = date('ymd').'/'.str_replace(' ', '-', $request->title);
        $data->status               = '1';
        $data->writer_id            = '1';
        $data->publish_date     = date('Y-m-d H:i:s');
        // if($request->status == '1'){
        //     $data->publish_date     = date('Y-m-d H:i:s');
        // }else{
        //     $data->publish_date     = '0000-00-00 00:00:00';
        // }
        $data->save();
        return redirect()->route('article.index');
    }

    public function delete($alias){
        $data = Article::where('alias', $alias)->first();
        $data->delete();

        return redirect()->route('article.index');
    }


}