@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Recommended Item</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recommended Item Infomation
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="1">
                                       
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Meeting Title">
                                        </div>

                                         <div class="form-group">
                                            <label>Type of items</label>
                                            <select class="form-control" id="type_of_items">
                                               
                                                <option>Video</option>
                                                <option>Hyperlink</option>
                                            </select>
                                        </div>


                                         <div class="form-group" id = "Video">
                                            <label>Video ID</label>
                                            <input class="form-control" placeholder="Video ID">
                                        </div>
                                        <div class="form-group" id = "Hyperlink" style="display: none;">
                                            <label>Hyperlink </label>
                                            <input class="form-control" placeholder="Hyperlink">
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

       <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Audience information 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>Audience</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">HCP Speaker
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">HCP Non Speaker
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Pharmacist
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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


