@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 学校管理</h2>
            </div>
            <div class="box-content">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ URL::to('/school/create') }}">创建新学校</a>      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>学校名称</th>
                            <th>学校地址</th>
                            <th>学校电话</th>
                            <th>学校主页</th>
                            <th>所在城市</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $model)
                        <tr>
                            <td>{{$model->id}} </td>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->address }}</td>
                            <td>{{ $model->phone }}</td>
                            <td>{{ $model->homepage }}</td>
                            <td>{{ $model->city }}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('classRoom/' . $model->id) }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    教室管理
                                </a>
                                <a class="btn btn-info" href="{{ URL::to('school/' . $model->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>    
                                <a class="btn btn-danger" href="{{ URL::to('school/' . $model->id) }}">
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
