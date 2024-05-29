@extends('layouts.admin')
@section('content')
@can('jenisgtk_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.jenisgtks.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.jenisgtk.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.jenisgtk.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-JenisGTK">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.jenisgtk.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.jenisgtk.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jenisgtks as $key => $jenisgtk)
                        <tr data-entry-id="{{ $jenisgtk->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $jenisgtk->id ?? '' }}
                            </td>
                            <td>
                                {{ $jenisgtk->name ?? '' }}
                            </td>
                            <td>
                                @can('jenisgtk_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.jenisgtks.show', $jenisgtk->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('jenisgtk_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.jenisgtks.edit', $jenisgtk->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('jenisgtk_delete')
                                    <form action="{{ route('admin.jenisgtks.destroy', $jenisgtk->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('jenisgtk_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.jenisgtks.massDestroy') }}",
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
  let table = $('.datatable-JenisGTK:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection