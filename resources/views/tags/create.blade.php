@extends('layout.app')

@section('title', 'Add Tags')

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
                        <a href="#">Tags</a> /
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
            <form action="{{ route('tags/store') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="title" name="title" type="text" class="validate" placeholder="Title" required> 
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
