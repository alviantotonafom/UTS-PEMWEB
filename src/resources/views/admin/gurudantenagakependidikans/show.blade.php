@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.gurudantenagakependidikan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.gurudantenagakependidikans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.id') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.image') }}
                        </th>
                        <td>
                            @if($gurudantenagakependidikan->image)
                                <a href="{{ $gurudantenagakependidikan->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $gurudantenagakependidikan->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.fullname') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.dateofbirth') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->dateofbirth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.gender') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.jenisgtk') }}
                        </th>
                        <td>
                            {!! $gurudantenagakependidikan->jenisgtk !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.hiredate') }}
                        </th>
                        <td>
                            {!! $gurudantenagakependidikan->hiredate !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.address') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.phone') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.gurudantenagakependidikan.fields.email') }}
                        </th>
                        <td>
                            {{ $gurudantenagakependidikan->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.gurudantenagakependidikans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection