@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recommended Item</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-outline btn-default"><i class="fa fa-plus"></i> Add Recommended Item</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th><h6>Name</h6></th>
                                        <th><h6>Audience</h6></th>
                                        <td><h6>Created Date</h6></td>
                                       <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>SSSSS</td>
                                        <td>HCP Non Speaker</td>
                                        <td>2017-12-12 15:00:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/recommend_itemDetail"> edit </a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>XXXXX</td>
                                        <td>HCP Speaker</td>
                                        <td>2017-12-12 15:00:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/recommend_itemDetail"> edit </a></td>
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
