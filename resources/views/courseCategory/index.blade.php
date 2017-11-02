@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 课程类别管理</h2>
            </div>
            <div class="box-content">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ URL::to('courseCategory/create') }}">创建新类别</a>      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>课程类别名称</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($courseCategories as $courseCategory)
                    <tr>
                        <td>{{$courseCategory->id}} </td>
                        <td>{{ $courseCategory->name }}</td>
                       
                         <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('courseCategory/' . $courseCategory->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                <a class="btn btn-danger" href="{{ URL::to('courseCategory/' . $courseCategory->id) }}">
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
