@extends('layout.app')

@section('title', 'Add Category')

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
            <form action="{{ route('store_category') }}" method="post">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text" class="validate" placeholder="Placeholder"> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <select id="category_id" name="category_id"> 
                                        <option value="" disabled selected>Choose Category</option> 
                                        <?php
                                            //foreach(get_category_list() as $item)
                                        ?>
                                        <option value="1">Teknologi</option>
                                        <option value="2">Entertainment</option>
                                        <option value="3">Otomotif</option>
                                        <option value="4">Traveling</option>
                                        <?php
                                            //endforeach
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <label for="source">Source</label>
                                    <input id="source" name="source" type="text" class="validate" placeholder="Placeholder"> 
                                </div>
                            </div>

                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <label for="link">Link</label>
                                    <input id="link" name="link" type="text" class="validate" placeholder="Placeholder"> 
                                </div>
                            </div>
                        
                            <div class="col l12 m12">
                                <h4>Description</h4>
                                <textarea id="ckeditor1" name="description_article"></textarea>

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
                                        <input type="checkbox" id="status" name="status" value="1"/> 
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
                                    <label for="image_caption">Image Caption</label>
                                    <input id="image_caption" type="text" class="validate" placeholder="Image Caption" id="image_caption" name="image_caption"> 
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
    <script src="bower_components/ckeditor/ckeditor.js" type="text/javascript"></script>

    <!-- CKEditor -->
    <script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.inline('ckeditor2');
    CKEDITOR.inline('ckeditor3');
    </script>




@endsection
