@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Digital Tool</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Digital Tool
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="1">
                                       
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Meeting Title">
                                        </div>

                                        <div class="form-group" id="type_of_items">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>URL</option>
                                                <option>WebSite</option>
                                            </select>
                                        </div>

                                         <div class="form-group" id="URL">
                                            <label>Apple Store Download URL</label>
                                            <input class="form-control" placeholder="Apple Store Download URL">
                                            <label>Android Market Download URL</label>
                                            <input class="form-control" placeholder="Android Market Download URL">
                                        </div>
                                        <div class="form-group" id="WebSite" style="display: none;">
                                            <label>WebSite URL</label>
                                            <input class="form-control" placeholder="WebSite URL">
                                        </div>
                                      
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="2">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <input type="file">
                                        </div>

                                         <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="6" ></textarea>
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


