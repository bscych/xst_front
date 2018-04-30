@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 班级管理</h2>
            </div>
            <div class="box-content">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ URL::to('/plan/create') }}">创建新班级</a>      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>班级名称</th>
                            <th>课程</th>
                            <th>主讲老师</th>
                            <th>班主任</th>
                            <th>开课时间</th>
                            <th>上课规律</th>
                            <th>教室</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $model)
                        <tr>
                            <td>{{$model->code}} </td>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->course_id }}</td>
                            <td>{{ $model->teacher }}</td>
                            <td>{{ $model->supervisor }}</td>
                            <td>{{ $model->start_at.'-'.$model->end_at}}</td>
                            <td>{{ $model->start_at.'-'.$model->end_at}}</td>
                             <td>{{ $model->classroom_id}}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('plan/' . $model->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                <a class="btn btn-danger" href="{{ URL::to('plan/' . $model->id) }}">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    删除
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

@endsection
