@extends('layouts.nav')

@section('content')
<div class="container-fluid">
                <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit User</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" disable="" value="User Name">
                                        </div>
                                        <!--div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Last Name">
                                        </div-->
                                    
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="2">
                                       <div class="form-group">
                                            <label>Roles</label>
                                            <label class="checkbox">
                                                <input type="checkbox">Contributor
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox">HCP manager
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox">Medical square uploader
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox">Admin
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

</div>
@endsection
