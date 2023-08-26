<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'opening_date' => 'required|date_format:Y-m-d|before_or_equal:closing_date',
            'closing_date' => 'required|date_format:Y-m-d|after_or_equal:opening_date',
            'description_' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'opening_date' => 'Tanggal buka',
            'closing_date' => 'Tanggal tutup',
            'description_' => 'Deskripsi',
        ];
    }
}
