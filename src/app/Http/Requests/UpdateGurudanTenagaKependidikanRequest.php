<?php

namespace App\Http\Requests;

use App\Models\GurudanTenagaKependidikan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateGurudanTenagaKependidikanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('gurudantenagakependidikan_edit');
    }

    public function rules()
    {
        return [
            'fullname' => [
                'string',
                'nullable',
                'required',
            ],
            'dateofbirth' => [
                'date_format:' . config('panel.date_format'),
                'required',
            ],
            'jenisgtk' => [
                'string',
                'required',
            ],
            'hiredate' => [
                'date_format:' . config('panel.date_format'),
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'phone' => [
            ],
            'email' => [
            ],
        ];
    }
}
