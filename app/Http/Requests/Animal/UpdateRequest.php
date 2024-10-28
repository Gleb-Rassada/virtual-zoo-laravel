<?php

namespace App\Http\Requests\Animal;

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
            'type' => 'required|string',
            'age' => 'required|integer|between:1,250',
            'description' => 'string',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Имя животного обязательно.',
            'name.string' => 'Имя животного должно быть строкой..',
            'type.required' => 'Тип животного обязателен.',
            'type.string' => 'Тип должен быть строкой.',
            'age.required' => 'Возраст животного обязателен.',
            'age.between' => 'Возраст животного должен быть от 1 до 250 лет.',
            'age.integer' => 'Возраст должен быть числом.',
            'description.string' => 'Описание должно быть строкой.',
        ];

    }
}
