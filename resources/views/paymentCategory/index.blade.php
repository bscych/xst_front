@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 交费类别管理</h2>
            </div>
            <div class="box-content">
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ URL::to('paymentCategory/create') }}">创建新类别</a>      
                </p>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable responsive">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>交费类别名称</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($paymentCategories as $paymentCategory)
                    <tr>
                        <td>{{$paymentCategory->id}} </td>
                        <td>{{ $paymentCategory->name }}</td>
                       
                         <td class="center">
                                <a class="btn btn-info" href="{{ URL::to('paymentCategory/' . $paymentCategory->id . '/edit') }}">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                <a class="btn btn-danger" href="{{ URL::to('paymentCategory/' . $paymentCategory->id) }}">
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
