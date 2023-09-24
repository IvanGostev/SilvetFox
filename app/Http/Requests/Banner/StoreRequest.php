<?php

namespace App\Http\Requests\Banner;

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
            'user_id' => 'required|integer',
            'img' => 'required|image|max:10000|mimes:gif|dimensions:min_width=468,min_height=60,max_width=468,max_height=60',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
