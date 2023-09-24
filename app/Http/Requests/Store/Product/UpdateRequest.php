<?php

namespace App\Http\Requests\Store\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'img' => 'file|nullable|mimes:jpg,bmp,png',
            'video' => 'file|nullable|mimes:mp4',
            'price' => 'required|integer',
            'dollars' => 'required|integer',
            'category_id' => 'required|integer',
            'africa' => 'nullable|string',
            'north_america' => 'nullable|string',
            'caribbean' => 'nullable|string',
            'asia' => 'nullable|string',
            'australia' => 'nullable|string',
            'europe' => 'nullable|string',
            'russia' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
