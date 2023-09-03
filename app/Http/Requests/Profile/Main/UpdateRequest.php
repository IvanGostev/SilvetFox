<?php

namespace App\Http\Requests\Profile\Main;

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
            'name' => 'required|string',
            'pgp_key' => 'required|string',
            'old_password' => 'string|nullable',
            'new_password' => 'string|nullable',
            'repeat_password' => 'string|nullable',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
