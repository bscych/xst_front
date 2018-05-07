@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i> 新增学生</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/student') }}">

                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label class="control-label">学号 ： </label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">姓名 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label class="control-label">电话 ： </label>
                        <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">电子邮箱 ： </label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}"> 
                    </div>

                    <div id="datetimepicker" class="input-append date form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                        <label class="control-label">生日 ： </label>
                        <input type="text" lass="form-control" name="birthday" value="{{ old('birthday') }}"></input>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('wechat') ? ' has-error' : '' }}">
                        <label class="control-label">微信 ： </label>
                        <input type="text" class="form-control" name="wechat" value="{{ old('wechat') }}"> 
                    </div>

                    <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                        <label class="control-label">备注信息 ： </label>
                        <textarea class="autogrow" class="form-control" name="comments" value="{{ old('comments') }}"></textarea>
                    </div>

                    <div class="form-group{{ $errors->has('primaryschool') ? ' has-error' : '' }}">
                        <label class="control-label">就读学校 ： </label>
                        <input type="text" class="form-control" name="primaryschool" value="{{ old('primaryschool') }}"> 
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