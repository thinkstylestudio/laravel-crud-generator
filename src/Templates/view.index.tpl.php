@extends('[[custom_master]]')

@section('page_title')
{{ ucfirst('[[model_plural]]') }}
@endsection

@section('content')

<div class="widget-body">
  <div class="table-toolbar">
    <div class="widget">
      <form class="form-inline pull-left" role="form">
        <div class="form-group">
          <span class="input-icon icon-right">
            <div id="w1" style="position: relative">
              <input type="text" value="{{ @$_GET['from_date'] }}" id="input_from" class="form-control date-picker-wgi" name="from_date" placeholder="Từ ngày">
            </div>
            <i class="fa fa-calendar"></i>
          </span>
        </div>
        <div class="form-group">
          <span class="input-icon icon-right">
            <div id="w1" style="position: relative">
              <input type="text" value="{{ @$_GET['to_date'] }}" id="input_to" class="form-control date-picker-wgi" name="to_date" placeholder="Đến ngày">
            </div>
            <i class="fa fa-calendar"></i>
          </span>
        </div>
        <div class="form-group">
            <span class="input-icon icon-right">
              <input type="text" value="{{ @$_GET['keyword'] }}" class="form-control" name="keyword" placeholder="Thông tin cần tìm">
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
          <th></th>
        </tr>
        </thead>
        <tbody>
          @foreach ($models as $model)
          <tr>
            [[foreach:columns]]
            <td>{{ $model->[[i.name]] }}</td>
            [[endforeach]]
            <td>
                <a href="{{ url('/users/' . $model->id . '/edit') }}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Sửa</a>
                <a href="#" onclick="return doDelete({{ $model->id }})" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Xóa</a>
            </td>
          </tr>
          @endforeach
          <tr class="lpagination">
            <td colspan="2" class="noBorder">
                <div class="summary">Trình bày <b>{{ $models->firstItem() }}-{{ $models->lastItem() }}</b> trong số <b>{{ $models->total() }}</b> mục.</div>
            </td>
            <td colspan="13">
                {{ $models->links() }}
            </td>
          </tr>
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
                            return '<a href="{{ url('/[[route_path]]') }}/'+row[0]+'/edit" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>' +
                          '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>';
                        },
                        "targets": [[num_columns]]
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