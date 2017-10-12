@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Brands Mapping With Lilly Play</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brand Mapping with Lilly Play
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>TA</label>
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="Diabetes" disabled="disabled">
                                            
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="Diabetes" disabled="disabled">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                             
                              <div class="col-lg-4">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="Humalog" disabled="disabled">
                                            </div>
                                        <div class="form-group">
                                        <input class="form-control" placeholder="Lilly Play Brand ID" value="Trulicity " disabled="disabled">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                 <div class="col-lg-4">
                                    <form role="form" lpformnum="1">
                                       
                                         <div class="form-group">
                                            <label>Brand ID from Lilly Play</label>
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="683c86e9-f585-44c2-be8f-e29a8b0afc06">
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="683c86e9-f585-44c2-be8f-e29a8b0afc06">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-4 (nested) -->

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


