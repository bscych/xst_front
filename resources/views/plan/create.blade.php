@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i> 创建班级</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/plan') }}">

                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label class="control-label">班级编码 ： </label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') }}">   

                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">班级名称 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('numberOfPeriod') ? ' has-error' : '' }}">
                        <label class="control-label">课时数 ： </label>
                        <input type="text" class="form-control" name="numberOfPeriod" value="{{ old('numberOfPeriod') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('numberOfStudent') ? ' has-error' : '' }}">
                        <label class="control-label">学生数 ： </label>
                        <input type="text" class="form-control" name="numberOfStudent" value="{{ old('numberOfStudent') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('start_at') ? ' has-error' : '' }}">
                        <label class="control-label">开始 ： </label>
                        <input type="text" class="form-control" name="start_at" value="{{ old('start_at') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('end_at') ? ' has-error' : '' }}">
                        <label class="control-label">结束 ： </label>
                        <input type="text" class="form-control" name="end_at" value="{{ old('end_at') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="control-label">班级描述 ： </label>
                        <input type="text" class="form-control" name="description" value="{{ old('description') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                        <label class="control-label">课程 ： </label>
                        <select class="form-control" name="course_id" >
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group{{ $errors->has('teacher') ? ' has-error' : '' }}">
                        <label class="control-label">主讲老师 ： </label>
                        <select class="form-control" name="teacher" >
                            @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('supervisor') ? ' has-error' : '' }}">
                        <label class="control-label">班主任 ： </label>
                        <select class="form-control" name="supervisor" >
                            @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('classroom_id') ? ' has-error' : '' }}">
                        <label class="control-label">教室 ： </label>
                        <select class="form-control" name="classroom_id" >
                            @foreach($classrooms as $classroom)
                            <option value="{{$classroom->id}}">{{$classroom->name}}</option>
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
