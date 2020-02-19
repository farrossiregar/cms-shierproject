@extends('layout.app')

@section('title', 'Category')

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
            <div class="row">
                <div class="col l12 m12">
                    <a href="{{ route('add_category') }}" class="waves-effect waves-dark btn blue"><i></i> Tambah</a>
                </div>
            </div>
            <table id="table_data_article" class="display table table-striped table-hover"> 
                <thead> 
                    <tr> 
                        <th>No</th> 
                        <th>Title</th> 
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($data as $item)
                    <tr> 
                        <td>{{ $item->id }}</td> 
                        <td>{{ $item->title }}</td> 
                        <td>{{ $item->status }}</td>
                        <td>
                            <span><a href="{{ route('edit_category', $item->id) }}" class="btn yellow"><i class="fa fa-edit"></i></a></span>
                            <span><a href="{{ route('add_article') }}" class="btn red"><i class="mdi-action-delete"></i></a></span>
                        </td>
                    </tr> 
                    @endforeach
                </tbody> 
            </table> 

            
            <!-- Data Tables -->
            <script type="text/javascript" src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
            <script type="text/javascript" src="bower_components/datatables-scroller/js/dataTables.scroller.js"></script>



            <script type="text/javascript" src="assets/dataTables/js/jquery.dataTables.min.js"></script> 
            <script> $('#table_data_article').DataTable({ "iDisplayLength": 5, "aLengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "all"] ] }); </script>
            <script stype="text/javascript">
                $('#table_data_article').DataTable({
                    "iDisplayLength": 5,
                    "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "all"]
                    ]
                });
            </script>
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
