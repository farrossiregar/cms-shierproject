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
                        <a href="#">Article</a> /
                    </li>

                    <li>
                        <a href='dashboard.html'>Create</a>
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
            <form action="{{ route('store_article') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="title" name="title" type="text" class="validate" placeholder="Title" required> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <select id="category_id" name="category_id" class="browser-default" required> 
                                        <option value="" disabled selected>Choose Category</option> 
                                        @foreach($category as $item)
                                        <option value="{{ $item->id }}" >{{ $item->title }}</option> 
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="source" name="source" type="text" class="validate" placeholder="Source"> 
                                </div>
                            </div>
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="link" name="link" type="text" class="validate" placeholder="Link"> 
                                </div>
                            </div>
                        
                            <div class="col l12 m12">
                                <h5>Description</h5>
                                <textarea id="ckeditor1" name="description_article" required></textarea>
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
                                        <input type="checkbox" id="status" name="status" value="1"/> 
                                        <span class="lever"></span> Publish 
                                    </label> 
                                </p> -->
                                <p> 
                                    <input class="with-gap" name="status" type="radio" id="status1" value="1"  /> 
                                    <label for="status1">Publish</label> 
                                </p> 
                                <p> 
                                    <input class="with-gap" name="status" type="radio" id="status2" value="0" /> 
                                    <label for="status2">Archive</label> 
                                </p> 
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="file-field input-field"> 
                                <div class="btn"> 
                                    <span>File</span> 
                                    <input type="file" id="file" name="file" required> 
                                </div> 
                                <div class="file-path-wrapper"> 
                                    <input class="file-path validate" type="text" id="image_name" name="image_name" required>                                   
                                </div>
                                    
                                </div> 
                            </div>

                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="image_source" type="text" class="validate" name="image_source" placeholder="Image Source"> 
                                </div>
                                <div class="input-field"> 
                                    <input id="image_caption" type="text" class="validate" name="image_caption" placeholder="Image Caption"> 
                                </div>
                                
                            </div>
                            <!-- <div class="col l12 m12">
                                <h5>Element</h5>
                                <hr>
                                <label for="">Youtube</label>
                                <div class="input-field">
                                    <textarea name="" id="youtube_player" cols="30" rows="10">
                                        <div class="yt-container">
                                            <iframe src="https://www.youtube.com/embed/hA6hldpSTF8" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </textarea>
                                </div>

                                <label for="">Movie Desc</label>
                                <div class="input-field">
                                    <textarea name="" id="movie_desc" cols="30" rows="50">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Pemeran : Robert Downey Jr, Chris Evans, Chris Hemsworth, Mark Rufallo, Scarlett Johansson, Jeremy Renner</li>
                                            <li class="list-group-item">Sutradara : Anthony dan Joe Russo</li>
                                            <li class="list-group-item">Durasi : 3 Jam 2 Menit</li>
                                            <li class="list-group-item">Rating : IMDb : 8.4/10, Rotten Tomatoes : 94%</li>
                                            <li class="list-group-item">Studio : Walt Disney</li>
                                            <li class="list-group-item">Pendapatan : $ 2.7 Miliar</li>
                                        </ul>
                                    </textarea>
                                    <br>

                                </div>
                            </div>
                            <br><br>

                            <div class="col l12 m12">
                                <h4>Tags</h4>
                                <div class="field_wrapper">
                                    <div>
                                        <input type="text" name="field_name[]" value=""/>
                                        <a href="javascript:void(0);" class="" title="Add field"><i class="fa fa-plus add_button"></i></a>
                                    </div>
                                </div>
                            </div> -->
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
    

    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fa fa-close "></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            //Once add button is clicked
            $(addButton).click(function(){
                
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>

    <!-- CKEditor -->
    <script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.inline('ckeditor2');
    CKEDITOR.inline('ckeditor3');
    </script>




@endsection
