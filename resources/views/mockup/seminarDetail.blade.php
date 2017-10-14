@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Live Web Seminar</h1>
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
                                            <label>System ID</label>
                                             <fieldset disabled="">
                                            <input class="form-control" disable="" value="eP2P001">
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Meeting Title">
                                        </div>

                                         <div class="form-group">
                                            <label>Ep2p URL </label>
                                            <input class="form-control" placeholder="Ep2p URL ">
                                        </div>
                                        <div class="form-group">
                                            <label>Survey URL </label>
                                            <input class="form-control" placeholder="Survey URL ">
                                        </div>
                                        <div class="form-group">
                                            <label>Video ID (video id from Lilly Play) </label>
                                            <input class="form-control" placeholder="Video ID ">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="2">
                                        <div class="form-group">
                                            <label>Start Date／Time</label>
                                            <input class="form-control" disable="" value="" placeholder="Start Time" >
                                        </div>
                                        <div class="form-group">
                                            <label>End Date／Time</label>
                                            <input class="form-control" disable="" value="" placeholder="End Time" >
                                        </div>
                                        <div class="form-group">
                                            <label>Meeting Description</label>
                                            <textarea class="form-control" rows="5" ></textarea>
                                        </div>

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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Speakers information 
                            <button type="" class="btn btn-default fa fa-plus">Add Speaker</button>
                        </div>
                        <div class="panel-body">
                           
                            <!-- /.row (nested) -->
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <label>Name :</label><span>DR. Zhang</span>
                                            <button type="button" class="close fa fa-times" aria-hidden="true"></button>
                                            <button type="button" class="close fa fa-minus" aria-hidden="true">  </button>
                                        </div>
                                        <div class="panel-body">
                                            <p><img src="{{ asset('img/19983164.jpg') }}" width="30%"/></p>
                                           
                                            <p><label>Hospital :</label><span>DR. Zhang</span></p>
                                            <p><label>web Site/FaceBook :</label><span>https://dsjdh.sdakh.com_create_guid</span></p>
                                            <p><label>CV :</label><span>DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</span></p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <label>Name :</label><span>DR. Zhang</span>
                                            <button type="button" class="close fa fa-times" aria-hidden="true"></button>
                                            <button type="button" class="close fa fa-minus" aria-hidden="true">  </button>
                                        </div>
                                        <div class="panel-body">
                                           <p><img src="{{ asset('img/19983164.jpg') }}" width="30%"/></p>
                                            
                                            <p><label>Hospital :</label><span>DR. Zhang</span></p>
                                            <p><label>web Site/FaceBook :</label><span>https://dsjdh.sdakh.com_create_guid</span></p>
                                            <p><label>CV :</label><span>DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</span></p>
                                         </div>
                                        
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                           <label>Name :</label><span>DR. Zhang</span>
                                            <button type="button" class="close fa fa-times" aria-hidden="true"></button>
                                            <button type="button" class="close fa fa-minus" aria-hidden="true">  </button>
                                        </div>
                                        <div class="panel-body">
                                           <p><img src="{{ asset('img/19983164.jpg') }}" width="30%"/></p>
                                           
                                            <p><label>Hospital :</label><span>DR. Zhang</span></p>
                                            <p><label>web Site/FaceBook :</label><span>https://dsjdh.sdakh.com_create_guid</span></p>
                                            <p><label>CV :</label><span>DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</span></p>
                                         </div>
                                       
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>

                             <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                           <label>Name :</label><span>DR. Zhang</span>
                                            <button type="button" class="close fa fa-times" aria-hidden="true"></button>
                                            <button type="button" class="close fa fa-minus" aria-hidden="true">  </button>
                                        </div>
                                        <div class="panel-body">
                                          <p><img src="{{ asset('img/19983164.jpg') }}" width="30%"/></p>
                                           
                                            <p><label>Hospital :</label><span>DR. Zhang</span></p>
                                            <p><label>web Site/FaceBook :</label><span>https://dsjdh.sdakh.com_create_guid</span></p>
                                            <p><label>CV :</label><span>DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</span></p>
                                         </div>
                                       
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                          <label>Name :</label><span>DR. Zhang</span>
                                            <button type="button" class="close fa fa-times" aria-hidden="true"></button>
                                            <button type="button" class="close fa fa-minus" aria-hidden="true">  </button>
                                        </div>
                                        <div class="panel-body">
                                           <p><img src="{{ asset('img/19983164.jpg') }}" width="30%"/></p>
                                          
                                            <p><label>Hospital :</label><span>DR. Zhang</span></p>
                                            <p><label>web Site/FaceBook :</label><span>https://dsjdh.sdakh.com_create_guid</span></p>
                                            <p><label>CV :</label><span>DLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</span></p>
                                         </div>
                                       
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            
                            </div>


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
