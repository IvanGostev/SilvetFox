<?php

namespace App\Http\Requests\Admin\User;

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
            'role' => 'required|integer',
            'balance' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Тип данных должен быть строкой',
            'role.integer' => 'Тип данных должен быть числом',
            'role.required' => 'Необходимо выбрать роль',
            'balance.integer' => 'Тип данных должен быть числом',
            'balance.required' => 'Необходимо указать баланс',
        ];
    }
}
