@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Medical Square</h1>
            </div>
        </div>

         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-outline btn-default fa fa-plus">add Medical Square</button>
                            <div class="input-group custom-search-form pull-right col-lg-4">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th><h6>Title</h6></th>
                                        <th><h6>Category</h6></th>
                                       
                                        <td><h6>TA<h6></td>
                                        <th><h6>Audience</h6></th>
                                        <td><h6>Created Date</h6></td>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>XXX Article</td>
                                        <td>Resources</td>
                                        <td>Hospital</td>
                                        <td>HCP Speaker,Lilly SR</td>
                                        <td>2017-12-12 15:00:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/medical_squareDetail"> edit </a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>AAA Article</td>
                                        <td>Medical Connect</td>
                                        <td>Hospital</td>
                                        <td>HCP non Speaker</td>
                                        <td>2017-12-12 15:00:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/medical_squareDetail"> edit </a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

</div>
@endsection
