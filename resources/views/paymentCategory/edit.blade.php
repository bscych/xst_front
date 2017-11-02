@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-book"></i> 编辑交费类别</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/paymentCategory/'.$model->id) }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">交费类别名称 ： </label>

                            <input type="text" class="form-control" name="name" value="{{ $model->name }}">   
                        
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
