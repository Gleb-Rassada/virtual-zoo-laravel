<?php

namespace App\Http\Requests\Cage;

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
            'tablet'=> 'required|string',
            'capacity'=> 'required|integer|between:1,50',
        ];
    }
    public function messages()
    {
        return [
            'tablet.required' => "Табличка обязательна.",
            'tablet.string' => "Табличка должна быть строкой",
            'capacity.required' => "Это поле необходимо заполнить",
            'capacity.integer' => "Вместимость должна быть числом",
            'capacity.between' => "Вместимость должна быть от 1 до 50.",
        ];
    }
}
