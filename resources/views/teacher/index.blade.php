@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 教师管理</h2>
            </div>
            <div class="box-content">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ URL::to('/teacher/create') }}">新增教师</a>      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>序号</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>联系人电话</th>
                            <th>所在学校</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $model)
                        <tr>
                            <td>{{$model->id}} </td>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->mobile }}</td>
                            <td>{{ $model->email }}</td>
                            <td>{{ $model->school_id}}</td>
                        
                            <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('student/' . $model->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                  <a class="btn btn-info" href="{{ URL::to('account?student_id='. $model->id) }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    账户管理
                                </a>
                                 <a class="btn btn-info" href="{{ URL::to('account/create?student_id='. $model->id) }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    交费
                                </a>
                                <a class="btn btn-danger" href="{{ URL::to('student/' . $model->id) }}">
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
