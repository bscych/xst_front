@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Lilly Product</h1>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Live Web Seminar Infomation
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
                                                <option>PDF</option>
                                                <option>Video</option>
                                                <option>Hyperlink</option>
                                            </select>
                                        </div>


                                         <div class="form-group" id = "PDF">
                                            <label>PDF upload</label>
                                            <input type="file">
                                        </div>
                                        <!--div class="form-group" id =  "PPT">
                                            <label>PPT upload</label>
                                            <input type="file">
                                        </div-->
                                         <div class="form-group" id = "Video" style="display: none;">
                                            <label>Video ID </label>
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
                                       
                                        <!--div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="6" ></textarea>
                                        </div-->
                                       

                                        <div class="form-group">
                                            <label>Key Words</label>
                                            <input class="form-control" disable="" value="" placeholder="Diabetes,糖尿病,低血糖,水果" >
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
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TA/Brand information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" lpformnum="1">

                                    <div class="form-group">
                                            <label>Diabetes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Humalog
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Trulicity
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Oncology</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Alimta
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Cyramza
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Osteoporosis</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Forteo
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Evista
                                            </label>
                                        </div>
                                    
                                         <div class="form-group">
                                            <label>Bio-Medicine</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Taltz
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Olumiant
                                            </label>
                                        </div>

                                         <div class="form-group">
                                            <label>Men’s Health</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Cialis
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Neuroscience</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Zyprexa
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Cymbalta 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">Strattera 
                                            </label>
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
                <!-- /.col-lg-6 -->

                <div class="col-lg-6">
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
