@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User</h1>
            </div>
        </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-outline btn-default"><i class="fa fa-plus"></i> Add User</button>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <p>It is on Heroku, which is not able to retrieve data from Lilly Net, that means we have to add user's detials from</p>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th><h6>User Name</h6></th>
                                        <th><h6>Hospital / Pharmacy</h6></th>
                                        <td><h6>Web site / facebook<h6></td>
                                        <td><h6>Created Date<h6></td>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>DR. Zhang</td>
                                        <td>HCP</td>
                                        <td>Hospital</td>
                                        <td>2018-12-12 15:30:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/speakerDetail"> edit</a>  <a class="fa fa-times" href="#"> delete </a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>DR. Wang</td>
                                        <td>Pharmacist</td>
                                        <td>Hospital</td>
                                        <td>2018-12-12 15:30:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/speakerDetail"> edit</a>  <a class="fa fa-times" href="#"> delete </a></td>
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
