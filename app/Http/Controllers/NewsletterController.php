<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use \Mailjet\Resources;

class NewsletterController extends Controller
{

    public function index()
    {
        
        return view('newsletter.index');
    }

    public function publish(){
        //require 'vendor/autoload.php';
        
        $mj = new \Mailjet\Client('9abcc63126c4d828d4e4292d6cca46f9','7479f0242424f8b9f8673384348ae6da',true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "shier.projectapp@gmail.com",
                'Name' => "Shier"
                ],
                'To' => [
                [
                    'Email' => "farros.jackson@gmail.com",
                    'Name' => "Farros Jackson"
                ]
                ],
                'Subject' => "Greetings from Mailjet.",
                'TextPart' => "My first Mailjet email",
                'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
                'CustomID' => "AppGettingStartedTest"
            ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());

        return view('newsletter.index');
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