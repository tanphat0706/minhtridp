@extends('backend.dashboard')
@section('title', trans('properties.list'))
@section('page_title') {{ trans('properties.list') }}
@stop
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header"></div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="propertieslist" class="table table-condensed display responsive nowrap" cellspacing="0"
                 width="100%">
            <thead style="color: blue;">
            <tr>
              <th>{{ trans('properties.name') }}</th>
              <th>{{ trans('properties.description') }}</th>
              <th>{{ trans('properties.created_at') }}</th>
              <th>{{ trans('properties.updated_at') }}</th>
              <th>#</th>
            </tr>
            </thead>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="box-footer">
    <button type="button" onclick="window.location='{{ route("properties-create") }}'" class="btn btn-primary"><i
          class="fa fa-plus-circle"></i> {{ trans('properties.add')}}</button>
  </div>
  @include('partial.confirm', ['body' => trans('properties.confirm_delete')])

@endsection
@section('js')
    $(function () {
        $('#propertieslist').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("json-properties-list") }}',
            columns: [
                {data: 'name', name: 'properties.name'},
                {
                    data: 'description', name: 'properties.description'
                },
                {data: 'created_at', name: 'properties.created_at'},
                {data: 'updated_at', name: 'properties.updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}],

            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty()).on('change', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                });
            }
        });
    });

    function confirmDelete(formId) {
        bootbox.confirm('{{ trans('properties.confirm_delete') }}', function (result) {
            if (result == true) {
                $('#' + formId).submit();
            }
        });
    }
@endsection

