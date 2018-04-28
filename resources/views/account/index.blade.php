@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 账户明细</h2>
            </div>
            <div class="box-content">
                <p>
                    <!--a class="btn btn-primary btn-lg" href="{{ URL::to('/student/create') }}">新增学生</a-->      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>序号</th>
                            <th>会计科目</th>
                            <th>金额</th>
                            <th>发生日期</th>
                            <th>操作人</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accountDetails as $model)
                        <tr>
                            <td>{{$model->code}} </td>
                            
                            <td>{{ $model->accountingSubjects }}</td>
                            <td>{{ $model->amount }}</td>
                            <td>{{ $model->created_at }}</td>
                            <td>{{ $model->operator}}</td>
                        
                            <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('student/' . $model->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                  <a class="btn btn-info" href="{{ URL::to('account/'. $model->id) }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    账户管理
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
