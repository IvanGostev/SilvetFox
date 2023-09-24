<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'score' => 'required|string',
            'rate_dollars' => 'required|string',
            'advertisement' => 'required|string',
            'terms_of_service' => 'required|string',
//            'information' => 'required|string',
            'rules' => 'required|string',
            'escrow' => 'required|string',
            'privacy_policy' => 'required|string',
//            'address' => 'required|string',
//            'email' => 'required|string',
//            'phone' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
