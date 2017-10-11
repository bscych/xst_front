@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Brand</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brand
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>Belongs to TA</label>
                                            <select class="form-control">
                                                <option>Diabetes</option>
                                                <option>Oncology</option>
                                                <option>Osteoporosis</option>
                                                <option>Bio-Medicine</option>
                                                <option>Men’s Health</option>
                                                <option>Neuroscience</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                             
                              <div class="col-lg-6">
                                    <form role="form" lpformnum="1">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="TA name">
                                        </div>
                                         <div class="form-group">
                                            <label>Brand ID from Lilly Play</label>
                                            <input class="form-control" placeholder="Lilly Play Brand ID" value="683c86e9-f585-44c2-be8f-e29a8b0afc06">
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


