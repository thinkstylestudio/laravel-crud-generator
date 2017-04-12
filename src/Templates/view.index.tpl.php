@extends('[[custom_master]]')

@section('content')

<div class="widget-body">
  <div class="table-toolbar">
    <div class="widget">
      <form class="form-inline pull-left" role="form">
        <div class="form-group">
          <span class="input-icon icon-right">
            <div id="w1" style="position: relative">
              <input type="text" id="input_from" class="form-control date-picker" name="from_date" placeholder="Từ ngày">
            </div>
            <i class="fa fa-calendar"></i>
          </span>
        </div>
        <div class="form-group">
          <span class="input-icon icon-right">
            <div id="w1" style="position: relative">
              <input type="text" id="input_from" class="form-control date-picker" name="from_date" placeholder="Đến ngày">
            </div>
            <i class="fa fa-calendar"></i>
          </span>
        </div>
        <div class="form-group">
            <span class="input-icon icon-right">
              <input type="text" class="form-control input-sm" placeholder="Thông tin cần tìm">
            </span>
        </div>
        <button type="submit" class="btn btn-info">Tìm kiếm</button>
      </form>
      <div class="btn-group pull-right">
        <a class="btn btn-success" href="{{url('[[route_path]]/create')}}"><i class="fa fa-plus withe"></i>Thêm mới</a>
        <a class="btn btn-danger" href="javascript:void(0);"><i class="fa fa-times withe circular"></i>Xóa</a>
        <a class="btn btn-primary" href="javascript:void(0);"><i class="glyphicon glyphicon-print"></i>In</a>
      </div>
    </div>
  </div>
  <div id="registration-form">
    <div class="table-scrollable">
      <table class="table table-striped table-bordered table-hover" id="thegrid">
        <thead>
        <tr>
          [[foreach:columns]]
          <th>[[i.display]]</th>
          [[endforeach]]
          <th style="width:50px"></th>
          <th style="width:50px"></th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "bFilter": false,
                "bInfo": false,
                "bLengthChange" : false,
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('[[route_path]]/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/[[route_path]]') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/[[route_path]]') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": [[num_columns]]
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": [[num_columns]]+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/[[route_path]]') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection