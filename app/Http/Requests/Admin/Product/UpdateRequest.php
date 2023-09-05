<?php

namespace App\Http\Requests\Admin\Product;

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
            'status' => 'required|integer',
            'price' => 'required|integer',
            'category_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Тип данных должен быть строкой',
            'description.required' => 'Это поле необходимо заполнить',
            'description.string' => 'Тип данных должен быть строкой',
            'status.integer' => 'Тип данных должен быть числом',
            'status.required' => 'Необходимо выбрать статус',
            'price.integer' => 'Тип данных должен быть числом',
            'price.required' => 'Необходимо выбрать цену',
            'category_id.integer' => 'Тип данных должен быть числом',
            'category_id.required' => 'Необходимо выбрать категорию',
        ];
    }
}
