<?php

namespace App\Http\Requests;

use App\Models\JenisGTK;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJenisGTKRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('jenisgtk_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
