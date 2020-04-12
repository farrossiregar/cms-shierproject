<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Article;
use App\Models\Category;
use App\Models\Image;

class ArticleController extends Controller
{

    public function index()
    {
        if(Session::get('login')){
            $params['data'] = Article::orderBy('id', 'DESC')->get();
            return view('article.index')->with($params);
        }else{
            return redirect('login');
        }
        
    }

    public function add(){
        if(Session::get('login')){
            $params['category'] = Category::all();
            return view('article.create')->with($params);
        }else{
            return redirect('login');
        }
    }

    public function edit($id)
    {
        if(Session::get('login')){
            $params['data']         = Article::where('id', $id)->first();
            $params['category']     = Category::all();
            $params['image']        = Image::where('id_article', $id)->first();

            return view('article.edit')->with($params);
        }else{
            return redirect('login');
        }
    }

    public function store(Request $request){
        if(Session::get('login')){
            $data =  new Article();
            $data->title                = $request->title;
            $data->description          = $request->description_article;
            $data->source               = $request->source;
            $data->category_id          = $request->category_id;
            $title_category             = Category::where('id', $request->category_id)->first();
            $data->link                 = $request->link;
            $data->alias                = str_replace(' ', '-', strtolower($title_category->title.'_'.date('ymd').'_'.$request->title));
            $data->status               = $request->status;
            $data->writer_id            = '1';
            if($request->status == '1'){
                $data->publish_date     = date('Y-m-d H:i:s');
            }else{
                $data->publish_date     = '0000-00-00 00:00:00';
            }
            $data->save();

            
            if ($request->file('file')){
                $image = new Image();
                $image->id_article          = $data->id;
                $image->image_caption       = $request->image_caption;


                $file = $request->file('file');
                //$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $fileName = $data->alias. "." . $file->getClientOriginalExtension();
    
                $destinationPath = public_path('/image/content/');
                $file->move($destinationPath, $fileName);
    
                //\Image::make(public_path(''. $fileName))->fit(100, 70)->save(public_path(''. $fileName));

                $image->image_name          = $fileName;
                $image->image_source        = $request->image_source;
                
                $image->save();
                
            }


            return redirect()->route('article');
        }else{
            return redirect('login');
        }
        
    }

    public function delete($id){
        $data = Article::where('id', $id)->first();
        $data->delete();

        $image = Image::where('id_article', $id)->first();
        $image->delete();

        return redirect()->route('article');
    }

    public function update(Request $request, $id){
        $data = Article::where('id', $id)->first();

        $data->title                = $request->get('title');
        $data->description          = $request->get('description_article');
        $data->source               = $request->get('source');
        $data->category_id          = $request->get('category_id');
        $data->link                 = $request->get('link');
        $title_category             = Category::where('id', $request->get('category_id'))->first();
        $data->alias                = str_replace(' ', '-', strtolower($title_category->title.'_'.date('ymd').'_'.$request->title));
        $data->status               = $request->get('status');
        $data->writer_id            = '1';
        if($request->status == '1'){
            $data->publish_date     = date('Y-m-d H:i:s');
        }
        $data->save();

        if ($request->file('file')){
            $image = Image::where('id_article', $id)->first();
            if(!$image){
                $image = new Image();
            }
            
            $image->id_article          = $data->id;
            $image->image_caption       = $request->get('image_caption');

            $file = $request->file('file');
            $fileName = $data->alias. "." . $file->getClientOriginalExtension();

            $destinationPath = public_path('/image/content/');
            $file->move($destinationPath, $fileName);

            //\Image::make(public_path(''. $fileName))->fit(100, 70)->save(public_path(''. $fileName));

            $image->image_name          = $fileName;
            $image->image_source        = $request->get('image_source');
            
            $image->save();
            
        }

        return redirect()->route('article');
    }


}