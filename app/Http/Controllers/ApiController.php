<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ApiController extends Controller
{

    public function index()
    {
        $data = Article::where('status', 1)->get();
        //return response()->json(['status' => "success", 'Access-Control-Allow-Origin' => 'file:///C:/empore_apps/htdocs/shier_project/index.html', 'data' => $data], 200);
        return response()->json($data);
    //     return response()->json(['success' => true], 200, [
    //     'Access-Control-Allow-Origin' => 'http://localhost'
    // ]);
    //return response()->json(['status' => "success", "product" => $product, "project"=>$project], 200);

    }

    public function detailArticle()
    {
        $data = Article::where('id', 1)->get();
        return json_encode($data);
    }

    
}