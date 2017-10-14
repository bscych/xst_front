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
                            <!--button type="button" class="btn btn-outline btn-default"><i class="fa fa-plus"></i> Add User</button-->
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <p>how many login ways are there?</p>
                        <p>Roles:
                            <ul>
                                <li>Contributor</li>
                                <li>HCP manager</li>
                                <li>Medical square uploader</li>
                                <li>Admin</li>
                            </ul>
                        </p>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th><h6>User Name</h6></th>
                                        <th><h6>Role</h6></th>
                                        
                                        <td><h6>Created Date<h6></td>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>C32398</td>
                                        <td>Contributor</td>
                                    
                                        <td>2018-12-12 15:30:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/userDetail"> edit</a>  <a class="fa fa-times" href="#"> delete </a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>V39240</td>
                                        <td>HCP manager</td>
                                        
                                        <td>2018-12-12 15:30:00</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/userDetail"> edit</a>  <a class="fa fa-times" href="#"> delete </a></td>
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
