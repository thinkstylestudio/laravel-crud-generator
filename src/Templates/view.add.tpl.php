@extends('[[custom_master]]')

@section('page_title')
  @if (isset($model))
    Sửa [[model_uc]]
  @else
    Thêm mới [[model_uc]]
  @endif
@endsection

@section('content')

    <form action="{{ url('/[[route_path]]'.( isset($model) ? "/" . $model->id : "")) }}" method="POST">

        <div class="alert alert-warning alert-dismissible error-summary" style="display:none"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-warning"></i> Vui lòng sửa các lỗi sau</h4><ul></ul></div>
            <div class="row" id="erMSG" style="display: none">
                <div class="col-sm-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4><i class="icon fa fa-warning"></i> Vui lòng sửa các lỗi sau</h4>
                        <ul>
                            <li><span id="bill-emsg"></span>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{ csrf_field() }}

        @if (isset($model))
            <input type="hidden" name="_method" value="PATCH">
        @endif

        <div class="tabbable">

            <div class="widget-body">
                <div id="registration-form">
                    <div class="row">
                        [[foreach:columns]]
                        [[if:i.type=='text']]
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="[[i.name]]">[[i.display]]</label>
                                <span class="input-icon icon-right">
                                    <input id="[[i.name]]" name="[[i.name]]" value="{{$model['[[i.name]]'] or ''}}"
                                           pre-show="true" pre-label="[[i.display]]"
                                           pre-val="{{$model['[[i.name]]'] or ''}}"
                                           pre-change-to="#[[i.name]]" aria-required="true"
                                           type="text" class="form-control input-sm">
                                </span>
                            </div>
                        </div>
                        [[endif]]
                        [[if:i.type=='number']]
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="[[i.name]]">[[i.display]]</label>
                                <span class="input-icon icon-right">
                                    <input id="[[i.name]]" name="[[i.name]]" value="{{$model['[[i.name]]'] or ''}}"
                                           pre-show="true" pre-label="[[i.display]]"
                                           pre-val="{{$model['[[i.name]]'] or ''}}"
                                           pre-change-to="#[[i.name]]" aria-required="true"
                                           type="number" class="form-control input-sm">
                                </span>
                            </div>
                        </div>
                        [[endif]]
                        [[if:i.type=='date']]
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="[[i.name]]">[[i.display]]</label>
                                <span class="input-icon icon-right">
                                    <div class="input-group" style="position: relative">
                                        <input id="[[i.name]]" name="[[i.name]]" value="{{$model['[[i.name]]'] or ''}}"
                                               pre-show="true" pre-label="[[i.display]]"
                                               pre-val="{{$model['[[i.name]]'] or ''}}"
                                               pre-change-to="#[[i.name]]" aria-required="true"
                                               type="text" class="form-control input-sm">
                                        <span class="input-group-addon" style="cursor: pointer;">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </span>
                            </div>
                        </div>
                        [[endif]]
                        [[if:i.type=='unknown']]
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="[[i.name]]">[[i.display]]</label>
                                <span class="input-icon icon-right">
                                    <input id="[[i.name]]" name="[[i.name]]" value="{{$model['[[i.name]]'] or ''}}"
                                           pre-show="true" pre-label="[[i.display]]"
                                           pre-val="{{$model['[[i.name]]'] or ''}}"
                                           pre-change-to="#[[i.name]]" aria-required="true"
                                           type="text" class="form-control input-sm">
                                </span>
                            </div>
                        </div>
                        [[endif]]
                        [[endforeach]]
                    </div>
                </div>
            </div>
            <div class="widget-body">
                <div id="html5Form" class="form-horizontal">
                    <div class="form-group has-feedback">
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-palegreen">Lưu lại</button>
                            <button type="button" class="btn btn-info">Xem trước</button>
                            <a href="{{ url('/[[route_path]]') }}" class="btn btn-danger">Hủy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection