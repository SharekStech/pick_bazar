<?php

namespace Marvel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('id');
        return [
            'name' => 'required|string|max:255|unique:offices,name,' . $id,
            'type' => 'required|in:HEAD,SUB_HEAD',
            'parent_id' => 'nullable|exists:offices,id',
            'address' => 'required|string',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric'
        ];
    }
}
