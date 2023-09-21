<?php

namespace App\Http\Requests\Store\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'countries' => 'required|string',
            'img' => 'required|file|mimes:jpg,bmp,png',
            'video' => 'nullable|file|mimes:mp4',
            'price' => 'required|integer',
            'dollars' => 'required|integer',
            'category_id' => 'required|integer',
            'store_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
