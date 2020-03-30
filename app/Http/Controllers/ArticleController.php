<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{

    public function index()
    {
        $params['data'] = Article::all();
        return view('article.index')->with($params);
    }

    public function add(){
        $params['category'] = Category::all();

        return view('article.create')->with($params);
    }

    public function edit($id)
    {
        $params['data'] = Article::where('id', $id)->first();
        $params['category'] = Category::all();


        return view('article.edit')->with($params);
    }

    public function store(Request $request){
        $data =  new Article();
        $data->title                = $request->title;
        $data->description          = $request->description_article;
        $data->source               = $request->source;
        $data->category_id          = $request->category_id;
        $data->link                 = $request->link;
        $data->alias                = date('ymd').'-'.str_replace(' ', '-', $request->title);
        $data->status               = '1';
        $data->writer_id            = '1';
        $data->publish_date     = date('Y-m-d H:i:s');
        // if($request->status == '1'){
        //     $data->publish_date     = date('Y-m-d H:i:s');
        // }else{
        //     $data->publish_date     = '0000-00-00 00:00:00';
        // }
        $data->save();
        return redirect()->route('article');
    }

    public function delete($id){
        $data = Article::where('id', $id)->first();
        $data->delete();

        return redirect()->route('article');
    }

    public function update(Request $request, $id){
        $data = Article::where('id', $id)->first();

        $data->title                = $request->get('title');
        $data->description          = $request->get('description_article');
        $data->source               = $request->get('source');
        $data->category_id          = $request->get('category_id');
        $data->link                 = $request->get('link');
        $data->alias                = date('ymd').'-'.str_replace(' ', '-', $request->title);
        $data->status               = $request->get('status');
        $data->writer_id            = '1';
        $data->save();

        return redirect()->route('article');
    }


}