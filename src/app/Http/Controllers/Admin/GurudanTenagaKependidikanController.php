<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGurudanTenagaKependidikanRequest;
use App\Http\Requests\StoreGurudanTenagaKependidikanRequest;
use App\Http\Requests\UpdateGurudanTenagaKependidikanRequest;
use App\Models\GurudanTenagaKependidikan;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class GurudanTenagaKependidikanController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('gurudantenagakependidikan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gurudantenagakependidikans = GurudanTenagaKependidikan::with(['media'])->get();

        return view('admin.gurudantenagakependidikans.index', compact('gurudantenagakependidikans'));
    }

    public function create()
    {
        abort_if(Gate::denies('gurudantenagakependidikan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.gurudantenagakependidikans.create');
    }

    public function store(StoreGurudanTenagaKependidikanRequest $request)
    {
        $gurudantenagakependidikan = GurudanTenagaKependidikan::create($request->all());

        if ($request->input('image', false)) {
            $gurudantenagakependidikan->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $gurudantenagakependidikan->id]);
        }

        return redirect()->route('admin.gurudantenagakependidikans.index');
    }

    public function edit(GurudanTenagaKependidikan $gurudantenagakependidikan)
    {
        abort_if(Gate::denies('gurudantenagakependidikan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.gurudantenagakependidikans.edit', compact('gurudantenagakependidikan'));
    }

    public function update(UpdateGurudanTenagaKependidikanRequest $request, GurudanTenagaKependidikan $gurudantenagakependidikan)
    {
        $gurudantenagakependidikan->update($request->all());

        if ($request->input('image', false)) {
            if (! $gurudantenagakependidikan->image || $request->input('image') !== $gurudantenagakependidikan->image->file_name) {
                if ($gurudantenagakependidikan->image) {
                    $gurudantenagakependidikan->image->delete();
                }
                $gurudantenagakependidikan->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($gurudantenagakependidikan->image) {
            $gurudantenagakependidikan->image->delete();
        }

        return redirect()->route('admin.gurudantenagakependidikans.index');
    }

    public function show(GurudanTenagaKependidikan $gurudantenagakependidikan)
    {
        abort_if(Gate::denies('gurudantenagakependidikan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.gurudantenagakependidikans.show', compact('gurudantenagakependidikan'));
    }

    public function destroy(GurudanTenagaKependidikan $gurudantenagakependidikan)
    {
        abort_if(Gate::denies('gurudantenagakependidikan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gurudantenagakependidikan->delete();

        return back();
    }

    public function massDestroy(MassDestroyGurudanTenagaKependidikanRequest $request)
    {
        $gurudantenagakependidikans = GurudanTenagaKependidikan::find(request('ids'));

        foreach ($gurudantenagakependidikans as $gurudantenagakependidikan) {
            $gurudantenagakependidikan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('gurudantenagakependidikan_create') && Gate::denies('gurudantenagakependidikan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new GurudanTenagaKependidikan();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
