@extends('layouts.admin')
@section('content')
@can('gurudantenagakependidikan_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.gurudantenagakependidikans.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.gurudantenagakependidikan.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.gurudantenagakependidikan.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-GurudanTenagaKependidikan">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.fullname') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.dateofbirth') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.jenisgtk') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.hiredate') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.email') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gurudantenagakependidikans as $key => $gurudantenagakependidikan)
                        <tr data-entry-id="{{ $gurudantenagakependidikan->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->id ?? '' }}
                            </td>
                            <td>
                                @if($gurudantenagakependidikan->image)
                                    <a href="{{ $gurudantenagakependidikan->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $gurudantenagakependidikan->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->dateofbirth ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->gender ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->jenisgtk ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->hiredate ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->address ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->phone ?? '' }}
                            </td>
                            <td>
                                {{ $gurudantenagakependidikan->email ?? '' }}
                            </td>
                            <td>
                                @can('gurudantenagakependidikan_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.gurudantenagakependidikans.show', $gurudantenagakependidikan->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('gurudantenagakependidikan_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.gurudantenagakependidikans.edit', $gurudantenagakependidikan->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('gurudantenagakependidikan_delete')
                                    <form action="{{ route('admin.gurudantenagakependidikans.destroy', $gurudantenagakependidikan->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('gurudantenagakependidikan_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.gurudantenagakependidikans.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-GurudanTenagaKependidikan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection