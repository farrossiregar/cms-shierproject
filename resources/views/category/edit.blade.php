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
            <form action="{{ route('category/update/', $data->id) }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col l6 m12">
                        <div class="row">
                            <div class="col l12 m12">
                                <div class="input-field"> 
                                    <input id="title" name="title" type="text" class="validate" placeholder="Title Category" value="{{ $data->title }}"> 
                                </div>
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
    <!-- <script src="bower_components/ckeditor/ckeditor.js" type="text/javascript"></script> -->

    <!-- CKEditor -->
    <!-- <script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.inline('ckeditor2');
    CKEDITOR.inline('ckeditor3');
    </script> -->




@endsection
