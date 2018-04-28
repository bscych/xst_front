@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i> 创建用户</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/user') }}">

                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">课程名称 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label class="control-label">课程单价 ： </label>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                        <label class="control-label">单课时长（分钟） ： </label>
                        <input type="text" class="form-control" name="duration" value="{{ old('duration') }}">   

                    </div>
                    
                     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="control-label">课程类别 ： </label>
                        <select class="form-control" name="courseCategory_id" >
                                    @foreach($courseCategories as $courseCategory)
                                    <option value="{{$courseCategory->id}}">{{$courseCategory->name}}</option>
                                    @endforeach
                        </select>
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
