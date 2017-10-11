@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit HCP</h1>
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
                                            <label>System ID</label>
                                             <fieldset disabled="">
                                            <input class="form-control" disable="" value="HCP001">
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <label>Veeva ID</label>
                                            <input class="form-control" placeholder="Veeva ID">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input class="form-control" placeholder="email address">
                                        </div>
                                        <div class="form-group">
                                            <label>Registration Code</label>
                                            <input class="form-control" placeholder="Registration Code">
                                        </div>
                                        <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control">
                                                <option> HCP </option>
                                                <option>Pharmacist</option>
                                                <option>Lilly SR</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                                <option> Active</option>
                                                <option>De-active</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agreement email promotion </label>
                                            <div class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="">Yes, Receive
                                            </div>
                                            <div class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No,dont send
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>comments</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                      
                                        <button type="" class="btn btn-default">Save</button>
                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" lpformnum="2">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" disable="" value="" placeholder="User Name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" disable="" value="" placeholder="Mobile optional" >
                                        </div>
                                        <div class="form-group">
                                            <label>Hospital Name</label>
                                            <input class="form-control" placeholder="Hospital Name">
                                        </div>
                                       <div class="form-group">
                                            <label>TA</label>
                                            <select class="form-control">
                                                <option> Diabetes </option>
                                                <option>Oncology</option>
                                                <option>ED</option>
                                            </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Specialty</label>
                                            <select class="form-control">
                                                <option> HCP </option>
                                                <option>Pharmacist</option>
                                                <option>Lilly SR</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Speaker Pool</label>

                                            <div class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="">Speaker
                                            </div>
                                            <div class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Non Speaker
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Joined Date </label>
                                            <fieldset disabled="">
                                            <input class="form-control" placeholder="2017-8-30" disable="true">
                                            </fieldset>
                                        </div>
                                         <div class="form-group">
                                            <label>Late Login Date</label>
                                            <fieldset disabled="">
                                            <input class="form-control" placeholder="2017-9-30 12:00:00" disable="true">
                                            </fieldset>
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
