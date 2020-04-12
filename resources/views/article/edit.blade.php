@extends('layout.app')

@section('title', 'Edit Article')

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
                        <a href="#">Article</a> /
                    </li>

                    <li>
                        <a href='dashboard.html'>Edit</a>
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
            <form action="{{ route('article/update/', $data->id) }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="title" name="title" type="text" class="validate" value="{{ $data->title }}" required> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <select id="category_id" name="category_id" class="browser-default" required>
                                        <option value="" disabled selected>Choose Category</option> 
                                        @foreach($category as $item)
                                        <option value="{{ $item->id }}" <?php if($item->id == $data->category_id){ echo "selected"; } ?> >{{ $item->title }}</option> 
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="source" name="source" type="text" class="validate" value="{{ $data->source }}" > 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="link" name="link" type="text" class="validate" value="{{ $data->link }}"> 
                                </div>
                            </div>
                        
                            <div class="col l12 m12">
                                <h5>Description</h5>
                                <textarea id="ckeditor1" name="description_article" required>
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
                                <!-- <p class="switch"> 
                                    <label> 
                                        <input type="checkbox" id="status" name="status" value="{{ $data->status }}" <?php if($data->status == '1'){ echo "checked"; } ?>/> 
                                        <span class="lever"></span> Publish 
                                    </label> 
                                    
                                </p> -->
                                <p> 
                                    <input class="with-gap" name="status" type="radio" id="status1" value="1" <?php if($data->status == '1'){ echo "checked"; } ?> /> 
                                    <label for="status1">Publish</label> 
                                </p> 
                                <p> 
                                    <input class="with-gap" name="status" type="radio" id="status2" value="0" <?php if($data->status == '0'){ echo "checked"; } ?>/> 
                                    <label for="status2">Archive</label> 
                                </p> 
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m12">
                        <div class="row">
                            <?php
                                if($image != ''){
                                    $image_name = $image->image_name;
                                    $image_caption = $image->image_caption;
                                    $image_source = $image->image_source;
                                }else{
                                    $image_name = '';
                                    $image_caption = '';
                                    $image_source = '';
                                }
                            ?>
                            <div class="file-field input-field"> 
                                <div class="btn"> 
                                    <span>File</span> 
                                    <input type="file" id="file" name="file" value="<?php echo $image_name; ?>"> 
                                    
                                </div> 
                                
                                <div class="file-path-wrapper"> 
                                    <input class="file-path validate" type="text" id="image_name" name="image_name" value="<?php echo $image_name; ?>" required>                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-6"  style="width: 100%;">
                                        <img src="{{ asset('image/content').'/'.$image_name }}" alt="" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="image_source" type="text" class="validate" name="image_source" value="<?php echo $image_source; ?>"> 
                                </div>
                                <div class="input-field"> 
                                    <input id="image_caption" type="text" class="validate" ame="image_caption" value="<?php echo $image_caption; ?>" > 
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
