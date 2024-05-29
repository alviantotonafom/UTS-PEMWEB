<?php

namespace App\Http\Requests;

use App\Models\GurudanTenagaKependidikan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGurudanTenagaKependidikanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('gurudantenagakependidikan_create');
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
            'address' => [
                'string',
                'required',
            ],
            'phone' => [
            ],
            'email' => [
            ],
            'hiredate' => [
                'date_format:' . config('panel.date_format'),
                'required',
            ],
        ];
    }
}