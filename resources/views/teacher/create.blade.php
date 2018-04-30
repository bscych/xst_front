@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i> 新增教师</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/teacher') }}">

                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">姓名 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">电子邮件 ： </label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label">密码 ： </label>
                        <input type="text" class="form-control" name="password" value="{{ old('password') }}">   

                    </div>
                    
                     <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                        <label class="control-label">生日 ： </label>
                         <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}"> 
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
