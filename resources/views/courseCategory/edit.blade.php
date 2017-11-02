@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 编辑课程类别</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/courseCategory/'.$courseCategory->id) }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">课程类别名称 ： </label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ $courseCategory->name }}">   
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>提交
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

@endsection
