@extends('layouts.nav')

@section('content')
<div class="container-fluid">
                <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Speaker</h1>
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
                                            <label>Speaker Name</label>
                                            <input class="form-control" disable="" value="Speaker Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Hospital</label>
                                            <input class="form-control" placeholder="Hospital">
                                        </div>
                                        <div class="form-group">
                                            <label>Website/FaceBook</label>
                                            <input class="form-control" placeholder="URL">
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Speaker Profile</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                      
                                        <button type="" class="btn btn-default">Save</button>
                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="2">
                                       <div class="form-group">
                                            <label>Speaker Picture</label>
                                            <input type="file">
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
