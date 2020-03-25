@extends('layout.app')

@section('title', 'Add Article')

@section('content')

    <!-- Breadcrumb -->
    <div class="page-title">

        <div class="row">
            <div class="col s12 m9 l10">
                <h1>Dashboard</h1>

                <ul>
                    <li>
                        <a href="#"><i class="fa fa-home"></i> Home</a> /
                    </li>

                    <li>
                        <a href="#">Category</a> /
                    </li>

                    <li>
                        <a href='dashboard.html'>Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
            </div>
        </div>

    </div>
    <!-- /Breadcrumb -->

    <!-- Stats Panels -->
    <div class="row">
        <div class="card-panel">
            <form action="{{ route('article/update/', $data->id) }}" method="post">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="title" name="title" type="text" class="validate" value="{{ $data->title }}"> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <select id="category_id" name="category_id" class="browser-default">  {{ $data->category_id }}
                                        <option value="" disabled selected>Choose Category</option> 
                                        <option value="1" <?php if($data->category_id == '1'){ echo "selected"; } ?> >Anti Gaptek</option> 
                                        <option value="2" <?php if($data->category_id == '2'){ echo "selected"; } ?> >Butuh Hiburan ?</option> 
                                        <option value="3" <?php if($data->category_id == '3'){ echo "selected"; } ?> >Jalan-jalan yuk !</option> 
                                        <option value="4" <?php if($data->category_id == '4'){ echo "selected"; } ?> >Belanja di mana</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="source" name="source" type="text" class="validate" value="{{ $data->source }}"> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="link" name="link" type="text" class="validate" value="{{ $data->link }}"> 
                                </div>
                            </div>
                        
                            <div class="col l12 m12">
                                <h5>Description</h5>
                                <textarea id="ckeditor1" name="description_article">
                                    {{ $data->description }}
                                </textarea>
                                <br>

                                <!-- <h4 id="ckeditor2" contenteditable="true">Inline CKEditor</h4>
                                <div id="ckeditor3" contenteditable="true">
                                    <strong>Lorem ipsum</strong>, consectetur <i>adipisicing elit</i>. Dolorum sit quia rem, iste fuga quas
                                    <del>suscipit rerum blanditiis</del>, voluptatum voluptatibus minima sequi iure unde eum quam nesciunt voluptatem, qui illo.
                                </div> -->
                            </div>

                            <div class="col l12 m12">
                                <p class="switch"> 
                                    <label> 
                                        <input type="checkbox" id="status" name="status" value="1" <?php if($data->status == '1'){ echo "checked"; } ?>/> 
                                        <span class="lever"></span> Publish 
                                    </label> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="file-field input-field"> 
                                <div class="btn"> 
                                    <span>File</span> 
                                    <input type="file" id="image_thumbnail" name="image_thumbnail"> 
                                </div> 
                                <div class="file-path-wrapper"> 
                                    <input class="file-path validate" type="text" id="image_thumbnail" name="image_thumbnail"> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="image_caption" type="text" class="validate" id="image_caption" name="image_caption" placeholder="Image Caption"> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col l12 m12">
                        <button type="submit" class="waves-effect waves-dark btn blue">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    
    <!-- CKEditor -->
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

    <!-- CKEditor -->
    <script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.inline('ckeditor2');
    CKEDITOR.inline('ckeditor3');
    </script>




@endsection
