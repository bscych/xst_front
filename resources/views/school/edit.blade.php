@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 编辑课程类别</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/school/'.$model->id) }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">校区名称 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ $model->name }}">   

                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label class="control-label">校区电话 ： </label>
                        <input type="text" class="form-control" name="phone" value="{{ $model->phone }}">   

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="control-label">校区地址 ： </label>
                        <input type="text" class="form-control" name="address" value="{{ $model->address }}">   

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="control-label">校区主页 ： </label>
                        <input type="text" class="form-control" name="homepage" value="{{ $model->homepage}}">   

                    </div>
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label class="control-label">所在城市 ： </label>
                        <input type="text" class="form-control" name="city" value="{{ $model->city }}">   

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i>提交
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

@endsection
