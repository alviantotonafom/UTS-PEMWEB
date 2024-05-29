<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJenisGTKRequest;
use App\Http\Requests\StoreJenisGTKRequest;
use App\Http\Requests\UpdateJenisGTKRequest;
use App\Models\JenisGTK;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JenisGTKController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('jenisgtk_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisgtks = JenisGTK::all();

        return view('admin.jenisgtks.index', compact('jenisgtks'));
    }

    public function create()
    {
        abort_if(Gate::denies('jenisgtk_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jenisgtks.create');
    }

    public function store(StoreJenisGTKRequest $request)
    {
        $jenisgtk = JenisGTK::create($request->all());

        return redirect()->route('admin.jenisgtks.index');
    }

    public function edit(JenisGTK $jenisgtk)
    {
        abort_if(Gate::denies('jenisgtk_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jenisgtks.edit', compact('jenisgtk'));
    }

    public function update(UpdateJenisGTKRequest $request, JenisGTK $jenisgtk)
    {
        $jenisgtk->update($request->all());

        return redirect()->route('admin.jenisgtks.index');
    }

    public function show(JenisGTK $jenisgtk)
    {
        abort_if(Gate::denies('jenisgtk_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jenisgtks.show', compact('jenisgtk'));
    }

    public function destroy(JenisGTK $jenisgtk)
    {
        abort_if(Gate::denies('jenisgtk_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jenisgtk->delete();

        return back();
    }

    public function massDestroy(MassDestroyJenisGTKRequest $request)
    {
        $jenisgtks = JenisGTK::find(request('ids'));

        foreach ($jenisgtks as $jenisgtk) {
            $jenisgtk->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
